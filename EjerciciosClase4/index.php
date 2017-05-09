<?php
$nombre = "Chalo";
$nombre .= " Salvador";


echo '<html>';
echo '<head>';

echo '</head>';
echo '<body>';
?>
<?php
/*
 * Variables
 */
?>
<strong>
	<?php echo $nombre; ?>
</strong>

<div>
	<?php echo 'Hola $nombre'; ?>
    <br>
	<?php echo "Hola $nombre"; ?>

    <br>
	<?php echo 'Hola ' . $nombre; ?>

    <br>

	<?php
	/*
	 * Arreglos
	 */
	$estudiantes = ['Jose', 'Carlos', 1, 2, 'Juan'];
	print_r($estudiantes);


	echo '<pre>';
	print_r($estudiantes);
	echo '</pre>';

	echo $estudiantes[1];
	echo '<br>';
	echo $estudiantes[2];

	$estudiantes[] = 'nuevo estudiante';
	$estudiantes[] = 'otro estudainte';

	echo '<pre>';
	print_r($estudiantes);
	echo '</pre>';


	$estudiantes_carrera = [
		'Jose' => 'ASI',
		'Carlos' => 'ASA',
		'Juan' => 'EM'
	];

	foreach ($estudiantes_carrera as $nombre => $carrera) {
	    echo "El estudiante $nombre estudia $carrera";
    }

	echo '<pre>';
	print_r($estudiantes_carrera);
	echo '</pre>';

	echo $estudiantes_carrera['Jose'];

	$estudiantes_carrera['Juana'] = 'ET';
	$estudiantes_carrera['Maria'] = 'ASI';

	echo '<pre>';
	print_r($estudiantes_carrera);
	echo '</pre>';


	/*
	 * Arreglos Multidimensionales
	 */

	$carreras_estudiantes = [
        'ASI' => ['e1', 'e2', 'e3'],
        'ASA' => ['e4', 'e5', 'e6', 'e7'],
        'EM' => ['e8', 'e9', 'e10', 'e11', 'e12'],
        'ET' => ['e13', 'e14', 'e15']
    ];

	foreach ($carreras_estudiantes as $carrera => $estudiantes) {
	    echo "La carrera de $carrera tiene " . count($estudiantes) . " estudiantes";
	    echo "<br>";
	    echo "La lista de estudiantes para esta carrera es la siguiente: ";
		echo "<br>";

		foreach ($estudiantes as $key => $estudiante) {
	        echo $key . " " . $estudiante;
		    echo "<br>";
        }

		echo "<br><br>";
    }



	echo '<pre>';
	print_r($carreras_estudiantes);
	echo '</pre>';


	$carreras_estudiantes_materias = [
        'ASI' => [
            'e1' => [
                'm1' => [
                    'b1' => 9.8,
                    'b2' => 7.5
                ],
                'm2' => [9.8, 7.5],
            ],
            'e2' => ['m1', 'm2'],
            'e3' => ['m1', 'm2'],
            ],
        'ASA' => [
            'e4' => ['m1', 'm2'],
            'e5' => ['m1', 'm2'],
            'e6' => ['m1', 'm2'],
            'e7' => ['m1', 'm2'],
            ],
        'EM' => [
            'e8' => ['m1', 'm2'],
            'e9' => ['m1', 'm2'],
            'e10' => ['m1', 'm2'],
            'e11' => ['m1', 'm2'],
            'e12' => ['m1', 'm2'],
        ],
        'ET' => [
            'e13' => ['m1', 'm2'],
            'e14' => ['m1', 'm2'],
            'e15' => ['m1', 'm2']
        ]
    ];

	echo '<pre>';
	print_r($carreras_estudiantes_materias);
	echo '</pre>';
	?>
</div>
</body>
</html>
