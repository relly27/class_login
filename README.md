# class_login

- Identificación del PNF: Informática
- Profesor(a): Carrillo Roemi
- Unidad Curricular: PROGRAMACIÓN II
- Turno: Nocturno
- Sección: AIN30221
- Número de participantes: 4

## participantes:

- Relly Garcia, C.I: 27561321
- Mauricio Freites, C.I: 19202051
- Cleismer Guerra, C.I: 29697213
- Nicole Rodriguez, C.I: 28322374

## sql para crear la tabla necesaria

```sql
CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    nombre VARCHAR(255),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
![portada](https://github.com/relly27/class_login/blob/main/cover.png))
