function compRapContr(){
    const docById= new document.getElementById();
    if (!docById("Contraseña").contains([0-9])||!docById("Contraseña").contains(['a'-'z'])||!docById("Contraseña").contains(['A'-'Z'])) {
        // Comprobación Mayusculas,minuslculas y num3r1c0
        docById("Contraseña").document.write("Contraseña no válida");
        return false;
    }
    return true;
}