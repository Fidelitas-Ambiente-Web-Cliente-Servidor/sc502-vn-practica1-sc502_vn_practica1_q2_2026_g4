CREATE TABLE profesores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    especialidad VARCHAR(100),
    descripcion TEXT,
    correo VARCHAR(100),
    cursos VARCHAR(150),
    foto VARCHAR(100)
);

INSERT INTO profesores(nombre,especialidad,descripcion,correo,cursos,foto)
VALUES
('Ana Rodríguez','Desarrollo Web','Especialista en HTML, CSS y JavaScript.','ana@academia.com','HTML, CSS, JavaScript','profesor1.jpg'),
('María Fernández','Programación','Experta en Java y Python.','maria@academia.com','Java, Python','profesor2.jpg'),
('Carlos Gómez','Bases de Datos','Especialista en SQL y MySQL.','carlos@academia.com','SQL, MySQL','profesor3.jpg'),
('Luis Hernández','Ciberseguridad','Consultor en Ethical Hacking.','luis@academia.com','Linux, Redes','profesor4.jpg'),
('Laura Muñoz','Inteligencia Artificial','Investigadora en IA aplicada.','laura@academia.com','Machine Learning','profesor5.jpg');
2. ProfesoresModel.php