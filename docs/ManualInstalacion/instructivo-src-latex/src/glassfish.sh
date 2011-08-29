!/bin/bash 
# Glassfish: Script para iniciar automaticamente Glassfish en el server 
# chkconfig: 3 80 05 
# description: Script de arranque del glassfish 
GLASSFISH_HOME=/home/glassfish/GlassfishConGlassfish/LiferayPortal5_2_3; 
export GLASSFISH_HOME 

GLASSFISH_OWNER=glassfish; 
export GLASSFISH_OWNER 

start() { 
	echo -n "Arrancando Glassfish: " 
        echo "Arrancando Glassfish a las  `date`" >> $GLASSFISH_HOME/glassfish/domains/domain1/logs/startup.log 
        su $GLASSFISH_OWNER -c "$GLASSFISH_HOME/glassfish/bin/asadmin start-domain" >> $GLASSFISH_HOME/glassfish/domains/domain1/logs/startup.log 
        sleep 2 
        echo "finalizado" 
} 

stop() { 
        echo -n "Apagando Glassfish: " 
        echo "Apagando Glassfish a las `date`" >> $GLASSFISH_HOME/glassfish/domains/domain1/logs/startup.log 
        su $GLASSFISH_OWNER -c "$GLASSFISH_HOME/glassfish/bin/asadmin stop-domain" >> $GLASSFISH_HOME/glassfish/domains/domain1/logs/startup.log
        echo "finalizado" 
} 

case "$1" in 
	start) 
              	start 
                ;; 
        stop)
             	stop 
                ;; 
        restart) 
                stop 
                start 
                ;; 
        *) 
          	echo $"Uso: glassfish {start|stop|restart}" 
                exit 
esac 
