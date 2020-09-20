<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Agregar usuario administrador
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);


        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Alta Verapaz', 'region' => 'Región II o Verapaz']);
        DB::table('municipios')->insert(['nombre' => 'Chahal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chisec', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cobán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Fray Bartolomé de las Casas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Agustín Lanquín', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Panzós', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Raxruha', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Cristóbal Verapaz', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Chamelco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Carchá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz Verapaz', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa María Cahabón', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Senahú', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tactic', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tamahú', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tucurú', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Catalina la Tinta', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Baja Verapaz', 'region' => 'Región II o Verapaz']);
        DB::table('municipios')->insert(['nombre' => 'Cubulco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Granados', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Purulhá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Rabinal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Salamá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Jerónimo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Miguel Chicaj', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz El Chol', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Chimaltenago', 'region' => 'Región V o Central']);
        DB::table('municipios')->insert(['nombre' => 'Acatenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chimaltenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Tejar', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Parramos', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Patzicía', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Patzún', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Pochuta', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Andrés Itzapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José Poaquil', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Comalapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Martín Jilotepeque', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Apolonia', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz Balanyá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tecpán Guatemala', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Yepocapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Zaragoza', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Chiquimula', 'region' => 'Región III o Nororiente']);
        DB::table('municipios')->insert(['nombre' => 'Camotán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chiquimula', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Concepción Las Minas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Esquipulas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Ipala', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Jocotán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Olopa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Quezaltepeque', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Jacinto', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José La Arada', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Ermita', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Guatemala', 'region' => 'Región I o Metropolitana']);
        DB::table('municipios')->insert(['nombre' => 'Amatitlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chinautla', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chuarrancho', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Fraijanes', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Ciudad de Guatemala', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Mixco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Palencia', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Miguel Petapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José del Golfo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José Pinula', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Sacatepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Ayampuc', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Sacatepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Raimundo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Catarina Pinula', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Villa Canales', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Villa Nueva', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'El Progreso', 'region' => 'Región III o Nororiente']);
        DB::table('municipios')->insert(['nombre' => 'El Jícaro', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Guastatoya', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Morazán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Agustín Acasaguastlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Antonio La Paz', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Cristóbal Acasaguastlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sanarate', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sansare', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Escuintla', 'region' => 'Región V o Central']);
        DB::table('municipios')->insert(['nombre' => 'Escuintla', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Guanagazapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Iztapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Democracia', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Gomera', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Masagua', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Nueva Concepción', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Palín', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Vicente Pacaya', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Lucía Cotzumalguapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sipacate', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Siquinalá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tiquisate', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Huehuetenango', 'region' => 'Región VII o Noroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Aguacatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chiantla', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Colotenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Concepción Huista', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cuilco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Huehuetenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Jacaltenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Democracia', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Libertad', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Malacatancito', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Nentón', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Petatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Antonio Huista', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Gaspar Ixchil', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Ildefonso Ixtahuacán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Atitán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Ixcoy', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Mateo Ixtatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Miguel Acatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Necta', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Soloma', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Rafael La Independencia', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Rafael Petzal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Sebastián Coatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Sebastián Huehuetenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Ana Huista', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Bárbara', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz Barillas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Eulalia', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santiago Chimaltenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tectitán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Todos Santos Cuchumatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Unión Cantinil', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Izabal', 'region' => 'Región III o Nororiente']);
        DB::table('municipios')->insert(['nombre' => 'El Estor', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Livingston', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Los Amates', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Morales', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Puerto Barrios', 'id_departamento' => $id]);        

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Jalapa', 'region' => 'Región IV o Suroriente']);
        DB::table('municipios')->insert(['nombre' => 'Jalapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Mataquescuintla', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Monjas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Carlos Alzatate', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Luis Jilotepeque', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Manuel Chaparrón', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Pinula', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Jutiapa', 'region' => 'Región IV o Suroriente']);
        DB::table('municipios')->insert(['nombre' => 'Agua Blanca', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Asunción Mita', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Atescatempa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Comapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Conguaco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Adelanto', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Progreso', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Jalpatagua', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Jerez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Jutiapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Moyuta', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Pasaco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Quesada', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José Acatempa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Catarina Mita', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Yupiltepeque', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Zapotitlán', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Petén', 'region' => 'Región VIII o Petén']);
        DB::table('municipios')->insert(['nombre' => 'Dolores', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Chal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Flores', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Libertad', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Las Cruces', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Melchor de Mencos', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Poptún', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Andrés', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Benito', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Francisco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Luis', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Ana', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sayaxché', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Quetzaltenango', 'region' => 'Región VI o Suroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Almolonga', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cabricán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cajolá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cantel', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Coatepeque', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Colomba', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Concepción Chiquirichapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Palmar', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Flores Costa Cuca', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Génova', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Huitán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Esperanza', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Olintepeque', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Palestina de Los Altos', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Quetzaltenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Salcajá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Carlos Sija', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Francisco La Unión', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Ostuncalco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Martín Sacatepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Mateo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Miguel Sigüilá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sibilia', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Zunil', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Quiché', 'region' => 'Región VII o Noroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Canillá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chajul', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chicaman', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chiché', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chichicastenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chinique', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cunén', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Joyabaj', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Nebaj', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sacapulas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Patzité', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Pachalum', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Ixcán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Andrés Sajcabajá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Antonio Ilotenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Bartolomé Jocotenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Cotzal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Jocopilas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz del Quiché', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Uspantán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Zacualpa', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Retalhuleu', 'region' => 'Región VI o Suroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Champerico', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Asintal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Nuevo San Carlos', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Retalhuleu', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Andrés Villa Seca', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Felipe', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Martín Zapotitlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Sebastián', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz Muluá', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Sacatepéquez', 'region' => 'Región V o Central']);
        DB::table('municipios')->insert(['nombre' => 'Alotenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Antigua Guatemala', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Ciudad Vieja', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Jocotenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Magdalena Milpas Altas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Pastores', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Antonio Aguas Calientes', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Bartolomé Milpas Altas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Lucas Sacatepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Miguel Dueñas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santiago Sacatepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Catarina Barahona', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Lucía Milpas Altas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa María de Jesús', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santo Domingo Xenacoj', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sumpango', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'San Marcos', 'region' => 'Región VI o Suroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Ayutla', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Catarina', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Comitancillo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Concepción Tutuapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Quetzal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Rodeo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'El Tumbador', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Esquipulas Palo Gordo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Ixchiguan', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Blanca', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Reforma', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Malacatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Nuevo Progreso', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Ocos', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Pajapita', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Río Blanco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Antonio Sacatepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Cristóbal Cucho', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José Ojetenam', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Lorenzo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Marcos', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Miguel Ixtahuacán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pablo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro Sacatepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Rafael Pie de la Cuesta', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sibinal', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sipacapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tacaná', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tajumulco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Tejutla', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Santa Rosa', 'region' => 'Región IV o Suroriente']);
        DB::table('municipios')->insert(['nombre' => 'Barberena', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Casillas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Chiquimulilla', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cuilapa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Guazacapán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Nueva Santa Rosa', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Oratorio', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Pueblo Nuevo Viñas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Tecuaco', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Rafael Las Flores', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz Naranjo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa María Ixhuatán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Rosa de Lima', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Taxisco', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Sololá', 'region' => 'Región VI o Suroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Concepción', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Nahualá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Panajachel', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Andrés Semetabaj', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Antonio Palopó', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José Chacayá', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan La Laguna', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Lucas Tolimán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Marcos La Laguna', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pablo La Laguna', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pedro La Laguna', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Catarina Ixtahuacan', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Catarina Palopó', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Clara La Laguna', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Cruz La Laguna', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Lucía Utatlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa María Visitación', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santiago Atitlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Sololá', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Suchitepéquez', 'region' => 'Región VI o Suroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Chicacao', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Cuyotenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Mazatenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Patulul', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Pueblo Nuevo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Río Bravo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Samayac', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Antonio Suchitepéquez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Bernardino', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Francisco Zapotitlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Gabriel', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Jose La Maquina, Suchitepequez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San José El Idolo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Juan Bautista', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Lorenzo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Miguel Panán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Pablo Jocopilas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Bárbara', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santo Domingo Suchitepequez', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santo Tomás La Unión', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Zunilito', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Totonicapán', 'region' => 'Región VI o Suroccidente']);
        DB::table('municipios')->insert(['nombre' => 'Momostenango', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Andrés Xecul', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Bartolo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Cristóbal Totonicapán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Francisco El Alto', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa Lucía La Reforma', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Santa María Chiquimula', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Totonicapán', 'id_departamento' => $id]);

        $id = DB::table('departamentos')->insertGetId(['nombre' => 'Zacapa', 'region' => 'Región III o Nororiente']);
        DB::table('municipios')->insert(['nombre' => 'Cabañas', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Estanzuela', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Gualán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Huité', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'La Unión', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Río Hondo', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'San Diego', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Teculután', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Usumatlán', 'id_departamento' => $id]);
        DB::table('municipios')->insert(['nombre' => 'Zacapa', 'id_departamento' => $id]);
    }
}
