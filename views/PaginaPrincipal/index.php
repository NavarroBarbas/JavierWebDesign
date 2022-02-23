<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Open+Sans&family=Oswald&family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Open+Sans&family=Oswald&family=PT+Sans:ital@1&family=Source+Code+Pro&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
<div class="principal">
    <?php include_once __DIR__ . '/../templates/sidebar.php'; ?>

    <section class="personalInfo seccion" id="personalInfo">
        <h2>Información Personal</h2>
        <div class="contenedor-info">
            <picture class="fotoperfil">
                <source srcset="build/img/fotoperfil.webp" type="image/webp">
                <source srcset="build/img/fotoperfil.png" type="image/png">
                <img loading="lazy" src="build/img/fotoperfil.png" alt="imagen perfil">
            </picture>

            <div class="informacionPrincipal">
                <h3>Javier Navarro Dieguez</h3>
                <p>25 años</p>
                <p>608435331</p>
                <p>LMax3r@hotmail.com</p>
            </div>
        </div>

        <div class="informacionSec">
                <p>Con ganas de aprender, responsable y me gusta trabajar en equipo. Estoy comenzando en el mundo de la programación web y estoy en constante formación.</p>
                <p>Dispongo del carnet B de conducir, así como vehículo propio.</p>
            </div>
       
    </section>

    <section class="seccion" id="formacion">
        <h2>Educación y Formación</h2>

        <div class="contenedor-formacion">
            <div class="formacion">
                <p>Bachiller Ciéntifico Tecnológico - <span>IES La Ribera</span></p>
            </div>
            
            <div class="formacion">
                <p>Grado en Ingeniería Informática - <span>Universidad de las Islas Baleares</span></p>
                <p class="fechas">09/2016 - 07/2017</p>
            </div>

            <div class="formacion">
                <p>Grado Superior de Administración de Sistemas Informáticos en Red - <span>CIFP Pau Casesnoves</span></p>
                <p class="fechas">09/2017 - 12/2020</p>

                <ul>
                    <li>Administración de redes</li>
                    <li>Administración de Sistemas Operativos</li>
                    <li>Bases de Datos</li>
                    <li> Programación básica en HTML y CSS</li>
                </ul>
            </div>

            <div class="formacion">
                <p>Desarrollo Web Completo con HTML5, CSS3, JS, AJAX, PHP y MySQL - <span>Certificación en Udemy</span></p>
                <p class="fechas">12/2021 - 02/2022</p>
                
                <ul>
                    <li>HTML5, CSS3, JavaScript, jQuery, AJAX,  PHP y MySQL</li>
                    <li>AdminLTE</li>
                    <li>CRUD</li>
                    <li>BOOTSTRAP</li>
                    <li>PAYPAL</li>
                    <li>Leaflet - API maps</li>
                    <li>Twitter Feed</li>
                    <li>MailChimp</li>
                </ul>
            </div>

            <div class="formacion">
                <p>React: De cero a experto ( Hooks y MERN ) - <span>Certifación en Udemy</span></p>
                <p class="fechas">02/2022 - Actual</p>

                <ul>
                    <li>MERN - Mongo Express React Node</li>
                    <li>Autenticación con Google y JWTs (JsonWebTokens)</li>
                    <li>Hooks</li>
                    <li>Redux, Context y otros manejadores de estado</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="seccion" id="experiencia">
        <h2>Experiencia</h2>
        
        <div class="contenedor-experiencia">
            <div class="experiencia">
                <p>Prácticas en Help Desk - <span>BRÚJULA A CMC COMPANY</span></p>
                <p class="fechas">10/2020 - 12/2020</p>

                <ul>
                    <li>Experiencia laboral como becario en prácticas del grado superior.</li>
                    <li>Soporte informático remoto.</li>
                    <li>Uso de Jira para gestión de incidencias.</li>
                    <li>Monitorización de servidores mediante Zabbix e Icinga.</li>
                </ul>
            </div>

            <div class="experiencia">
                <p>Help Desk - <span>BRÚJULA A CMC COMPANY</span></p>
                <p class="fechas">02/2021 - 06/2021</p>

                <ul>
                    <li>Uso de Jira para gestión de incidencias.</li>
                    <li>Monitorización de servidores mediante Zabbix e Icinga.</li>
                    <li>Revisiones diarias de backups.</li>
                    <li>Soporte en Active Directory.</li>
                    <li>Mantenimiento de ordenadores.</li>
                    <li>Asistencia teléfonica.</li>
                    <li>VPN.</li>
                    <li>Google Admin.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="seccion" id="competencias">
        <h2>Competencias Digitales</h2>

        <div class="contenedor-competencias">
            <div class="competencias">
                <div class="competencia">
                    <ul>
                        <li>Trabajo en equipo.</li>
                        <li>Responsabilidad en el trabajo</li>
                        <li>Metodología de trabajo</li>
                        <li>Organización y puntualidad</li>
                        <li>Comunicación</li>
                        <li>Jira</li>
                        <li>Zabbix</li>
                        <li>Icinga</li>
                        <li>Instalación y configuración de red (DHCP, DNS, FTP, correo, SAMBA, AD, HTTP, VPN)</li>
                        <li>Manejo de los servidores Windows y Linux</li>
                        <li>Mantenimiento, soporte, helpdesk, diseño e implementación de redes</li>
                        <li>Resolucion de problemas informaticos y de redes</li>
                    </ul>
                </div>

                <div class="competencia">
                    <ul>
                        <li>VMware vSphere</li>
                        <li>Manejo avanzado de herramienta de monitorizacin Nagios en el mbito laboral</li>
                        <li>Monitorización</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                        <li>Agregar pagos de PayPal a tus sitios web</li>
                        <li>jQuery</li>
                        <li>AdminLTE</li>
                        <li>Twitter Feed</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>