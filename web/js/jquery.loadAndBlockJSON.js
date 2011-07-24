/*
* plagiado por Yo
*/
(function ($) {
    $.fn.loadAndBlockJSON = function (obj, options) {

        function setElementValue(element, value, name) {
            var type = element.type || element.tagName;
            if (type == null)
                return;
            type = type.toLowerCase();
            switch (type) {

                case 'radio':
                    if (value.toString().toLowerCase() == element.value.toLowerCase())
                        $(element).attr("checked", "checked");
                    break;

                case 'checkbox':
                    if (value)
                        $(element).attr("checked", "checked");
                    break;

                case 'select-multiple':
                    var values = value.constructor == Array ? value : [value];
                    for (var i = 0; i < element.options.length; i++) {
                        for (var j = 0; j < values.length; j++) {
                            element.options[i].selected |= element.options[i].value == values[j];
                        }
                    }
                    break;

                case 'select':
                case 'select-one':
                case 'text':
                case 'hidden':
                    $(element).attr("value", value);
                    $(element).css("color","red").css("font-weight","bold").attr("disabled","disabled").css("background-color","#666666");
                    break;
                case 'a':
                    var href = $(element).attr("href");
                    var iPosition = href.indexOf('?');
                    if (iPosition > 0) // if parameters in the URL exists add new pair using &
                        href += '&' + name + '=' + value;
                    else//otherwise attach pair to URL
                        href = href + '?' + name + '=' + value;
                    $(element).attr("href", href);
                    break;
                case 'img': //Assumption is that value is in the HREF$ALT format
                    var iPosition = value.indexOf('$');
                    var src = "";
                    var alt = "";
                    if (iPosition > 0) {
                        src = value.substring(0, iPosition);
                        alt = value.substring(iPosition + 1);
                    }
                    else {
                        src = value;
                        var iPositionStart = value.lastIndexOf('/') + 1;
                        var iPositionEnd = value.indexOf('.');
                        alt = value.substring(iPositionStart, iPositionEnd);
                    }
                    $(element).attr("src", src);
                    $(element).attr("alt", alt);
                    break;

                case 'textarea':
                case 'submit':
                case 'button':
                default:
                    try {
                        $(element).html(value);
                    } catch (exc) { }
            }

        }

        function browseJSON(obj, element, name) {

            // no object
            if (obj == undefined) {
            }
            // branch
            else if (obj.constructor == Object) {
                for (var prop in obj) {
                    if (prop == null)
                        continue;
                    //Find an element with class, id, name, or rel attribute that matches the propertu name
                    var child = jQuery.makeArray(jQuery("." + prop, element)).length > 0 ? jQuery("." + prop, element) :
                                                    jQuery("#" + prop, element).length > 0 ? jQuery("#" + prop, element) :
                                                    jQuery('[name="' + prop + '"]', element).length > 0 ? jQuery('[name="' + prop + '"]', element) : jQuery('[rel="' + prop + '"]');
                    if (child.length != 0)
                        browseJSON(obj[prop], jQuery(child, element), prop);
                }
            }
            // array
            else if (obj.constructor == Array) {
                if (element.length > 0 && element[0].tagName == "SELECT") {
                    setElementValue(element[0], obj, name);
                } else {
                    var arrayElements = $(element).children("[rel]");
                    if (arrayElements.length > 0) {//if there are rel=[index] elements populate them instead of iteration
                        arrayElements.each(function () {
                            var rel = $(this).attr("rel");
                            //setElementValue(this, obj[rel], name);
                            browseJSON(obj[rel], $(this), name);
                        });
                    } else {//recursive iteration
                        var arr = jQuery.makeArray(element);
                        var template = $(arr[arr.length - 1]).clone(true);
                        //how many duplicate
                        var nbToCreate = obj.length - arr.length;
                        var i = 0;
                        var iExist = 0;
                        for (iExist = 0; iExist < arr.length; iExist++) {
                            if (i < obj.length) {
                                var elem = $(element).eq(iExist);
                                browseJSON(obj[i], elem, name);
                            }
                            i++;
                        }
                        //fill started by last
                        i = obj.length - 1;
                        var iCreate = 0;
                        for (iCreate = 0; iCreate < nbToCreate; iCreate++) {
                            //duplicate the last
                            var last = template.clone(true).insertAfter(arr[arr.length - 1]);
                            browseJSON(obj[i], last, name);
                            i--;
                        }
                    }
                }
            }
            // data only
            else {
                var value = obj;
                var type;
                if (element.length > 0) {
                    var i = 0;
                    for (i = 0; i < element.length; i++)
                        setElementValue(element[i], obj, name);
                }
                else {
                    setElementValue(element, obj, name);
                }
            }
        } //function browseJSON end

        var defaults = {
    };

    properties = $.extend(defaults, options);

    return this.each(function () {

        if (obj.constructor == String) {
            try {
                var data = $.parseJSON(obj);
                browseJSON(data, this);
            }
            catch (ex) {
                var element = $(this);
                $.get(obj, function (data) {
                    element.loadJSON(data);
                });
            }
        }

        else {
            browseJSON(obj, this);
        }
    });
};
})(jQuery);