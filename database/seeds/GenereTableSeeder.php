<?php

use Illuminate\Database\Seeder;
use App\Genere;

class GenereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genere::create( [
'id'=>1,
'genere_music'=>'Rap',
'detall'=>'Este género musical surgió en los barrios negros e hispanos neoyorquinos en los ochenta y alcanzó su apogeo en los noventa. Se caracteriza por un juego de réplicas y contrarréplicas de lenguaje combativo.',
'active'=>1,
'created_at'=>'2018-07-27 01:21:02',
'updated_at'=>'2018-07-27 01:26:00'
] );

			

Genere::create( [
'id'=>2,
'genere_music'=>'Rock alternativo',
'detall'=>'Es una manifestación underground posiblemente contracultural, por consiguiente no es del común de la vitrina de cualquier discotienda. Intenta presentar lo nuevo, o por lo menos combina y recrea con cierto ingenio formas roqueras conocidas.',
'active'=>1,
'created_at'=>'2018-07-27 01:26:23',
'updated_at'=>'2018-07-27 01:26:23'
] );

			

Genere::create( [
'id'=>3,
'genere_music'=>'Hip-Hop',
'detall'=>'Este género es el padre del rap y su origen es principalmente urbano su expresión máxima se da en la calle misma. Incluye expresiones tales como el graffiti y el breakdance.',
'active'=>1,
'created_at'=>'2018-07-27 01:26:41',
'updated_at'=>'2018-07-27 01:26:41'
] );

			

Genere::create( [
'id'=>4,
'genere_music'=>'Reggae',
'detall'=>'Estilo musical popular jamaiquino, de ritmo simple y repetitivo, que alcanzó su máxima difusión en los setenta gracias a los jamaiquinos residentes en Londres y al cantante Bob Marley.',
'active'=>1,
'created_at'=>'2018-07-27 01:26:58',
'updated_at'=>'2018-07-27 01:26:58'
] );

			

Genere::create( [
'id'=>5,
'genere_music'=>'Reggaeton',
'detall'=>'Se puede decir que es un nuevo ritmo entre rap y reggae que se ha popularizado en Panamá (donde comenzó en 1981). Renato, Nando Boom, Chicho Man y El General fue quien lo internacionalizara. Es un ritmo picante bailable, caribeño, tanto o más atrevido que el rap, por supuesto cada intérprete le da su propio estilo, aunque la letra de sus canciones por regla debe tener cierta picardía juvenil, mezcla de sexo y palabras de doble sentido para que pegue en el público. Teniendo sus orígenes en Jamaica, y después de las transformaciones efectuadas por parte de los más prestigiosos deejays',
'active'=>1,
'created_at'=>'2018-07-27 01:27:13',
'updated_at'=>'2018-07-27 01:27:13'
] );

			

Genere::create( [
'id'=>6,
'genere_music'=>'Bachata',
'detall'=>'Un género musical híbrido del bolero y el son, con estilo propio de la República Dominicana, cuyas características comprende los movimientos continuos de cinturas, dominio propio de los pasos originarios y un alto grado de compás de lo exacto de este género musical. Tiene un liga del bolero cubano es su ritmo; tal cosa ha sido así por su tipo de baile, cuyas características son parecidas sus orígenes en la República Dominicana, remota un estilo propio de la música clásica, siendo reconocida nacional e internacionalmente por sus expositores; así también por las características propias de la',
'active'=>1,
'created_at'=>'2018-07-27 01:27:29',
'updated_at'=>'2018-07-27 01:27:29'
] );

			

Genere::create( [
'id'=>7,
'genere_music'=>'Rock and roll',
'detall'=>'En el momento en el que el rythm and blues y el country and western empezaron a fusionarse a partir de los cincuenta, nació el rock and roll, llamado originalmente race music o sepia music. Cuando se abandonaron estas dos últimas definiciones – para evitar el estigma racial de la vieja clasificación – se eligieron para el nuevo nombre las dos palabras más repetidas de los temas del rythm and blues.',
'active'=>1,
'created_at'=>'2018-07-27 01:27:49',
'updated_at'=>'2018-07-27 01:27:49'
] );

			

Genere::create( [
'id'=>8,
'genere_music'=>'Clásica',
'detall'=>'El clasicismo musica comienza aproximadamente en 1750 (muerte de J. S. Bach) y termina en 1820 aproximadamente. La música clásica propiamente dicha coincide con la época llamada clasicismo, que en otras artes se trató de redescubrimiento y copia de los clásicos del arte greco romano, que era considerado tradicional o ideal. En la música no existió un clasicismo original ya que no había quedado escrita ninguna música de la época griega o romana. La música del clasicismo evoluciona hacia una música extremadamente equilibrada entre armonía y melodía. Sus principales exponentes son Haydn, Mozart y el primer Beethoven (ya que en su segunda época se volvió más romántico).',
'active'=>1,
'created_at'=>'2018-07-27 01:28:13',
'updated_at'=>'2018-07-27 01:28:13'
] );

			

Genere::create( [
'id'=>9,
'genere_music'=>'Rock progresivo',
'detall'=>'Esta música tiene sus orígenes en el art rock de los setenta, rock sinfónico, psicodélica, rock clásico, folk y muchas otras formas de música. En los últimos 20 años se ha utilizado la palabra progresivo para describir la música que producen las bandas colegiales y el pop alternativo entre otros.',
'active'=>1,
'created_at'=>'2018-07-27 01:28:31',
'updated_at'=>'2018-07-27 01:28:31'
] );

			

Genere::create( [
'id'=>10,
'genere_music'=>'Trash metal',
'detall'=>'Voces de ultratumba, casi rugidos, sobre bases guitarreras metálicas. Representó una revolución en el campo del heavy metal.',
'active'=>1,
'created_at'=>'2018-07-27 01:28:45',
'updated_at'=>'2018-07-27 01:28:45'
] );

			

Genere::create( [
'id'=>11,
'genere_music'=>'Balada',
'detall'=>'Género musical se originó en Italia, siendo su principal exponente el compositor Nicolás di Bari. La balada fue una manera de expresión sentimental, es decir una forma de expresión poética. Empezó a ser parte de la música cuando Nicolás di Bari originó un estilo propio con el uso de versos literarios con rima, y ritmos delicados al compás de las letras. Así se originó la balada, como expresión poética utilizando sonidos sensuales y sonidos cálidos, esparciéndose por toda Latinoamérica. Se caracteriza por su alto grado de sentimientos, el amor, desamor y sufrimiento; son cualidades peculiares que la caracterizan desde sus inicios.',
'active'=>1,
'created_at'=>'2018-07-27 01:29:03',
'updated_at'=>'2018-07-27 01:29:03'
] );

			

Genere::create( [
'id'=>12,
'genere_music'=>'Banda',
'detall'=>'Nació en México y se expandió por Latinoamérica. En sus inicios, los instrumentos españoles, como las cornetas, fueron su principal elemento. Durante el siglo XIX las bandas militares cobraron auge y fama en la parte occidental del territorio azteca. Un género que para muchos ha unido a un pueblo. La banda, un ritmo que rompe fronteras. Los músicos más populares de banda son Banda El Recodo, Cuisillos, Germán Lizárraga.',
'active'=>1,
'created_at'=>'2018-07-27 01:29:18',
'updated_at'=>'2018-07-27 01:29:18'
] );

			

Genere::create( [
'id'=>13,
'genere_music'=>'Salsa',
'detall'=>'La salsa es un género musical de música afro caribeña latinoamericana, que surgió en Nueva York. Fue creado por inmigrantes latinoamericanos, especialmente de Cuba, Puerto Rico y República mezclaron ritmos tradicionales latinos que dieron fondo a la música con varios estilo salsa es la principal música tocada esencial de la música latina», de acuerdo precursora fue, el dominicano Johnny Pacheco al crear la pauta a seguir con su empresa, Fania Records.',
'active'=>1,
'created_at'=>'2018-07-27 01:29:31',
'updated_at'=>'2018-07-27 01:29:31'
] );

			

Genere::create( [
'id'=>14,
'genere_music'=>'Punk',
'detall'=>'Se dice del movimiento musical de origen británico surgido a finales de los años sesenta y de sus manifestaciones en la moda y las costumbres. Sus principales representantes fueron los Sex Pistols, autores de un rock primario y vital. Sus seguidores son partidarios de una ideología anárquica y en ocasiones violenta; usan cabellos chillones, y ropa de cuero. A mitad de los noventa vuelve el punk con menos crestas aunque sí con pelos de colores. El trío Green Day, fue el el responsable de un nuevo punk más melódico y menos chillón. Más recientemente, podemos encontrar a la joven cantante Pink con una propuesta nueva para este género.',
'active'=>1,
'created_at'=>'2018-07-27 01:29:54',
'updated_at'=>'2018-07-27 01:29:54'
] );

			

Genere::create( [
'id'=>15,
'genere_music'=>'Jazz',
'detall'=>'Originario de los Estados Unidos. Concede gran importancia a la improvisación y se caracteriza por su ritmo cambiante. Surge a finales del siglo XIX de la conjunción de ritmos negroafricanos con melodías del folklore anglosajón. Sus características principales son el ritmo sincopado y la alternancia o superposición de los tiempos, el swing o balanceo que produce tensión emocional y la libertad de improvisación. En su origen recogió formas musicales tales como los espirituales y el gospel.',
'active'=>1,
'created_at'=>'2018-07-27 01:30:08',
'updated_at'=>'2018-07-27 01:30:08'
] );

			

Genere::create( [
'id'=>16,
'genere_music'=>'Rock sinfonico',
'detall'=>'Es una corriente del rock casi exclusiva de Londres. Sus exponentes producen un rock con impresionantes arreglos creando ese ambiente sinfónico, de música trabajada de sonidos serios. Sus principales representantes han sido Marillion, Yes, Génesis y Queen.',
'active'=>1,
'created_at'=>'2018-07-27 01:30:26',
'updated_at'=>'2018-07-27 01:30:26'
] );

			

Genere::create( [
'id'=>17,
'genere_music'=>'Cumbia',
'detall'=>'La cumbia es uno de los bailes más representativos del folclor autóctono colombiano. Al ritmo de un conjunto de gaitas acompañadas por tambores, la cumbia es sinónimo de baile, alegría y fiesta. Se desarrolla de manera libre: la mujer baila suelta, mientras que el hombre la sigue al compás de los movimientos sensuales de su cintura. Los músicos más populares de la cumbia  son Celso Piña, Sonora Dinamita.',
'active'=>1,
'created_at'=>'2018-07-27 01:30:39',
'updated_at'=>'2018-07-27 01:30:39'
] );

			

Genere::create( [
'id'=>18,
'genere_music'=>'Grunge',
'detall'=>'Es un híbrido entre el rock y el punk originado en los años noventa. Su exponente máximo fue Kurt Cobain, el vocalista fallecido de la agrupación Nirvana.',
'active'=>1,
'created_at'=>'2018-07-27 01:30:56',
'updated_at'=>'2018-07-27 01:30:56'
] );
    }
}
