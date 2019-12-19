Numero de GRUP: GRUP 4
-------------------------
Integrants del grup: Mario Gonzalez, Adam Jalich i Aleix Revesado
-------------------------
Objectiu del projecte: L'objectiu del projecte és crear un lloc web en el que els usuaris puguin compartir les experiencies viscudes en els seus viatges.
-------------------------
Estat del projecte: En procés.
-------------------------
Adreça del repositori (loopback :-D): https://github.com/Mariogg1/Viatges
-------------------------
Adreça del Jira: http://labs.iam.cat:8080/secure/RapidBoard.jspa?projectKey=VIAT3&rapidView=3
-------------------------
Adreça web de la documentació phpdoc (labs.iam.cat): http://labs.iam.cat/~a14alerevagu/pedralbes-experiencies/README.md
-------------------------
Adreça web del projecte desplegat (labs.iam.cat): http://labs.iam.cat/~a14alerevagu/pedralbes-experiencies/
-------------------------
Observacions respecte a la seguretat:

    - Validació básica en costat servidor feta.
    - Conversió de caràcters especials en entitats html fet.

    - Falten validacions en costat client.
    - Falta validar la mida i el format de les imatges.
    - Salts de directori no controlats com per exemple admin.php que tot i que no encara no existeix es pot accedir desde la URL sense ser admin.
    - Al modificar experiencies la id d'aquesta va per un camp de formulari ocult, canviant aquest valor l'usuari pot modificar cualsevol experiencia, sigui seva o no.
    - El mateix passa amb els usuaris.
    - Es pot llegir tot el text d'una experiencia sense estar registrat inspeccionant l'element que el conté o modificant alguna classe.
    - Les contrasenyes no van encriptades.

