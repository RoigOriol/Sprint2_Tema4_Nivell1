# Sprint2_Tema4_Nivell1_Exercici_1


📄 Descripció - Enunciat de l'exercici
L'objectiu d'aquest exercici és crear una classe Employee en PHP per representar un treballador. La classe tindrà dos atributs: nom i sou.

Enunciat:
Crea una classe Employee amb els atributs següents:
nom: El nom de l'empleat.
sou: El salari de l'empleat.
Defineix un mètode initialize que permeti establir els valors dels atributs.
Defineix un mètode print que mostri el nom de l'empleat i indiqui si ha de pagar impostos. Un empleat ha de pagar impostos si el seu salari és superior a 6000.
El programa principal crearà dues instàncies de Employee i mostrarà la seva informació.

💻 Tecnologies Utilitzades
PHP 7.0+: Llenguatge principal per a la implementació del programa.
PHP CLI o Servidor Local: Per executar i visualitzar el codi PHP.
IDE/Text Editor: Visual Studio Code, PHPStorm o Sublime Text.
📋 Requisits
PHP 7.0 o superior instal·lat.
Servidor local com XAMPP, WAMP o Valet (opcional si s'executa en entorn web).
Terminal o entorn d'execució PHP per a executar el programa.
🛠️ Instal·lació
Clona el repositori o descarrega els fitxers:

bash
Copiar código
git clone https://github.com/nomusuari/projecte-employee-php.git
cd projecte-employee-php
Estructura dels fitxers:

plaintext
Copiar código
projecte-employee-php/
├── Employee.php
└── main.php
Executa el servidor local (opcional):
Si utilitzes XAMPP o WAMP, col·loca els fitxers dins la carpeta htdocs.

▶️ Execució
Opció 1: Executar des de la línia d'ordres
Obre un terminal i accedeix a la carpeta del projecte:

bash
Copiar código
php main.php
La sortida serà:

plaintext
Copiar código
Nom: Oriol Roig  
Ha de pagar impostos.  

Nom: Pepito Perez  
No ha de pagar impostos.  
Opció 2: Executar des d'un navegador web
Accedeix a http://localhost/projecte-employee-php/main.php des del navegador.
La mateixa informació es mostrarà a la pantalla.
🌐 Desplegament
Per desplegar el projecte en un entorn de producció:

Carrega els fitxers (Employee.php i main.php) al teu servidor web.
Assegura't que el servidor tingui PHP 7.0+ instal·lat.
Accedeix al fitxer main.php des del teu domini:
plaintext
Copiar código
https://elteudomini.com/main.php
🤝 Contribucions
Les contribucions són benvingudes! Si vols millorar aquest projecte:

Fes un fork del repositori.
Crea una nova branca:
bash
Copiar código
git checkout -b feature/nova-funcio
Puja els teus canvis i envia un pull request.
Totes les contribucions seran revisades i validades per millorar el projecte. 😊