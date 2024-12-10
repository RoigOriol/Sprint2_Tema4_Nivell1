# Sprint2_Tema4_Nivell1_Exercici_2

📄 Descripció - Enunciat de l'exercici
L'objectiu d'aquest exercici és definir una estructura de classes en PHP per representar formes geomètriques. Es crea una classe base Shape amb un constructor que rep l'ample i l'alt de la forma. Posteriorment, es creen dues subclasses, Triangle i Rectangle, que calculen l'àrea específica de cada figura mitjançant un mètode area().

Enunciat:
Defineix una classe Shape amb els atributs següents:
ample: Ample de la forma.
alt: Alçada de la forma.
Defineix dues subclasses:
Triangle: Calcula l'àrea de la forma amb la fórmula: (ample * alt) / 2.
Rectangle: Calcula l'àrea amb la fórmula: ample * alt.
El programa principal ha de crear instàncies de Triangle i Rectangle i mostrar les seves àrees.
💻 Tecnologies Utilitzades
PHP 7.0+: Llenguatge principal per a la implementació del programa.
PHP CLI o Servidor Local: Per executar i visualitzar el codi PHP.
IDE/Text Editor: Visual Studio Code, PHPStorm o Sublime Text.
📋 Requisits
PHP 7.0 o superior instal·lat al sistema.
Servidor local com XAMPP, WAMP o Laravel Valet (opcional si s'executa en entorn web).
Coneixements bàsics de PHP i Programació Orientada a Objectes (POO).
🛠️ Instal·lació
Clona el repositori o descarrega els fitxers:

bash
Copiar código
git clone https://github.com/nomusuari/projecte-shapes-php.git
cd projecte-shapes-php
Estructura dels fitxers:

plaintext
Copiar código
projecte-shapes-php/
├── Shape.php
├── Triangle.php
├── Rectangle.php
└── main.php
Configuració del servidor local (opcional):

Col·loca els fitxers a la carpeta htdocs (XAMPP) o equivalent en altres servidors.
▶️ Execució
Opció 1: Executar des de la línia d'ordres
Obre un terminal i accedeix a la carpeta del projecte:

bash
Copiar código
php main.php
La sortida serà:

plaintext
Copiar código
L'àrea del triangle és: 25 cm2.  
L'àrea del rectangle és: 50 cm2.  
Opció 2: Executar des d'un navegador web
Accedeix a http://localhost/projecte-shapes-php/main.php des del navegador.
La mateixa informació es mostrarà a la pantalla.
🌐 Desplegament
Per desplegar el projecte en un entorn de producció:

Carrega els fitxers (Shape.php, Triangle.php, Rectangle.php i main.php) al teu servidor web.
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