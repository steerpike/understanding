<?php

use Illuminate\Database\Seeder;

class InfluencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('influences')->delete();
        
        \DB::table('influences')->insert(array (
            0 => 
            array (
                'id' => 1,
                'qid' => 'Q859',
                'name' => 'Plato',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            1 => 
            array (
                'id' => 2,
                'qid' => 'Q868',
                'name' => 'Aristotle',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            2 => 
            array (
                'id' => 3,
                'qid' => 'Q9358',
                'name' => 'Friedrich Nietzsche',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            3 => 
            array (
                'id' => 4,
                'qid' => 'Q43353',
                'name' => 'Aristophanes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-08 04:12:03',
            ),
            4 => 
            array (
                'id' => 5,
                'qid' => 'Q60025',
                'name' => 'Hannah Arendt',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            5 => 
            array (
                'id' => 6,
                'qid' => 'Q171303',
                'name' => 'Zeno of Citium',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            6 => 
            array (
                'id' => 7,
                'qid' => 'Q179149',
                'name' => 'Antisthenes',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            7 => 
            array (
                'id' => 8,
                'qid' => 'Q189506',
                'name' => 'Aristippus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            8 => 
            array (
                'id' => 9,
                'qid' => 'Q666230',
                'name' => 'Aristobulus of Paneas',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-08 04:12:03',
            ),
            9 => 
            array (
                'id' => 10,
                'qid' => 'Q937697',
                'name' => 'Stefan Molyneux',
                'available' => NULL,
                'deleted_at' => '2018-08-10 00:00:00',
                'created_at' => '2018-08-08 04:12:03',
                'updated_at' => '2018-08-08 04:12:03',
            ),
            10 => 
            array (
                'id' => 11,
                'qid' => 'Q10261',
                'name' => 'Pythagoras',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:26',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            11 => 
            array (
                'id' => 12,
                'qid' => 'Q42458',
                'name' => 'Anaximander',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:26',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            12 => 
            array (
                'id' => 13,
                'qid' => 'Q48301',
                'name' => 'Martin Heidegger',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:12:28',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            13 => 
            array (
                'id' => 14,
                'qid' => 'Q35802',
                'name' => 'Baruch Spinoza',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:09',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            14 => 
            array (
                'id' => 15,
                'qid' => 'Q9235',
                'name' => 'Georg Wilhelm Friedrich Hegel',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:11',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            15 => 
            array (
                'id' => 16,
                'qid' => 'Q34787',
                'name' => 'Friedrich Engels',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:11',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            16 => 
            array (
                'id' => 17,
                'qid' => 'Q125551',
                'name' => 'Parmenides',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:11',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            17 => 
            array (
                'id' => 18,
                'qid' => 'Q983648',
                'name' => 'Kostas Axelos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:11',
                'updated_at' => '2018-08-08 04:23:11',
            ),
            18 => 
            array (
                'id' => 19,
                'qid' => 'Q2718927',
                'name' => 'Pentti Saarikoski',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:11',
                'updated_at' => '2018-08-08 04:23:11',
            ),
            19 => 
            array (
                'id' => 20,
                'qid' => 'Q132157',
                'name' => 'Zeno of Elea',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:12',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            20 => 
            array (
                'id' => 21,
                'qid' => 'Q42156',
                'name' => 'Henri Bergson',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:15',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            21 => 
            array (
                'id' => 22,
                'qid' => 'Q1189157',
                'name' => 'Nausiphanes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:24',
                'updated_at' => '2018-08-08 04:23:24',
            ),
            22 => 
            array (
                'id' => 23,
                'qid' => 'Q7060',
                'name' => 'Michel Onfray',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:27',
                'updated_at' => '2018-08-08 04:23:27',
            ),
            23 => 
            array (
                'id' => 24,
                'qid' => 'Q43216',
                'name' => 'Epicurus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:27',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            24 => 
            array (
                'id' => 25,
                'qid' => 'Q262225',
                'name' => 'Arete of Cyrene',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:27',
                'updated_at' => '2018-08-12 22:44:22',
            ),
            25 => 
            array (
                'id' => 26,
                'qid' => 'Q381765',
                'name' => 'Theodorus the Atheist',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:27',
                'updated_at' => '2018-08-08 04:23:27',
            ),
            26 => 
            array (
                'id' => 27,
                'qid' => 'Q437876',
                'name' => 'Hegesias of Cyrene',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:27',
                'updated_at' => '2018-08-08 04:23:27',
            ),
            27 => 
            array (
                'id' => 28,
                'qid' => 'Q556865',
                'name' => 'Anniceris',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:27',
                'updated_at' => '2018-08-08 04:23:27',
            ),
            28 => 
            array (
                'id' => 29,
                'qid' => 'Q665984',
                'name' => 'Aristippus the Younger',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:27',
                'updated_at' => '2018-08-08 04:23:27',
            ),
            29 => 
            array (
                'id' => 30,
                'qid' => 'Q909',
                'name' => 'Jorge Luis Borges',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            30 => 
            array (
                'id' => 31,
                'qid' => 'Q7243',
                'name' => 'Leo Tolstoy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            31 => 
            array (
                'id' => 32,
                'qid' => 'Q9047',
                'name' => 'Gottfried Wilhelm Leibniz',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            32 => 
            array (
                'id' => 33,
                'qid' => 'Q9068',
                'name' => 'Voltaire',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            33 => 
            array (
                'id' => 34,
                'qid' => 'Q9204',
                'name' => 'C. S. Lewis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            34 => 
            array (
                'id' => 35,
                'qid' => 'Q9312',
                'name' => 'Immanuel Kant',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            35 => 
            array (
                'id' => 36,
                'qid' => 'Q9438',
                'name' => 'Thomas Aquinas',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-10-28 23:15:52',
            ),
            36 => 
            array (
                'id' => 37,
                'qid' => 'Q11903',
                'name' => 'Hypatia',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-12 22:44:22',
            ),
            37 => 
            array (
                'id' => 38,
                'qid' => 'Q38193',
                'name' => 'Arthur Schopenhauer',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            38 => 
            array (
                'id' => 39,
                'qid' => 'Q48226',
                'name' => 'Ralph Waldo Emerson',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            39 => 
            array (
                'id' => 40,
                'qid' => 'Q77144',
                'name' => 'Leo Strauss',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            40 => 
            array (
                'id' => 41,
                'qid' => 'Q123382',
                'name' => 'Frithjof Schuon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            41 => 
            array (
                'id' => 42,
                'qid' => 'Q130631',
                'name' => 'Jacques Derrida',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            42 => 
            array (
                'id' => 43,
                'qid' => 'Q271809',
                'name' => 'Proclus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            43 => 
            array (
                'id' => 44,
                'qid' => 'Q275003',
                'name' => 'Émile Chartier',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            44 => 
            array (
                'id' => 45,
                'qid' => 'Q438164',
                'name' => 'Samuel R. Delany',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            45 => 
            array (
                'id' => 46,
                'qid' => 'Q537304',
                'name' => 'Plutarch of Athens',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            46 => 
            array (
                'id' => 47,
                'qid' => 'Q664619',
                'name' => 'Rémi Brague',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            47 => 
            array (
                'id' => 48,
                'qid' => 'Q731904',
                'name' => 'Valentin Ferdinandovich Asmus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            48 => 
            array (
                'id' => 49,
                'qid' => 'Q822727',
                'name' => 'Bernard Stiegler',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            49 => 
            array (
                'id' => 50,
                'qid' => 'Q2716613',
                'name' => 'Ferdinand Alquié',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            50 => 
            array (
                'id' => 51,
                'qid' => 'Q2840364',
                'name' => 'Licinianus of Cartagena',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-10-28 23:15:53',
            ),
            51 => 
            array (
                'id' => 52,
                'qid' => 'Q3675891',
                'name' => 'Christos Androutsos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            52 => 
            array (
                'id' => 53,
                'qid' => 'Q28092109',
                'name' => 'Pierre-Jean Labarrière',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            53 => 
            array (
                'id' => 54,
                'qid' => 'Q28152056',
                'name' => 'Metrofan Aksyonov',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:32',
                'updated_at' => '2018-08-08 04:23:32',
            ),
            54 => 
            array (
                'id' => 55,
                'qid' => 'Q448',
                'name' => 'Denis Diderot',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            55 => 
            array (
                'id' => 56,
                'qid' => 'Q619',
                'name' => 'Nicolaus Copernicus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-08 04:23:37',
            ),
            56 => 
            array (
                'id' => 57,
                'qid' => 'Q1067',
                'name' => 'Dante Alighieri',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-08 04:23:37',
            ),
            57 => 
            array (
                'id' => 58,
                'qid' => 'Q6512',
                'name' => 'Søren Kierkegaard',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            58 => 
            array (
                'id' => 59,
                'qid' => 'Q8011',
                'name' => 'Avicenna',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            59 => 
            array (
                'id' => 60,
                'qid' => 'Q8409',
                'name' => 'Alexander the Great',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-08 04:23:37',
            ),
            60 => 
            array (
                'id' => 61,
                'qid' => 'Q11104',
                'name' => 'Ibn al-Haytham',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-10-29 03:17:08',
            ),
            61 => 
            array (
                'id' => 62,
                'qid' => 'Q34943',
                'name' => 'Ptolemy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-08 04:23:37',
            ),
            62 => 
            array (
                'id' => 63,
                'qid' => 'Q39837',
                'name' => 'Ibn Rushd',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-10-29 03:17:08',
            ),
            63 => 
            array (
                'id' => 64,
                'qid' => 'Q43936',
                'name' => 'William of Ockham',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            64 => 
            array (
                'id' => 65,
                'qid' => 'Q102851',
                'name' => 'Boethius',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            65 => 
            array (
                'id' => 66,
                'qid' => 'Q127398',
                'name' => 'Moses Maimonides',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-10-29 03:17:08',
            ),
            66 => 
            array (
                'id' => 67,
                'qid' => 'Q132524',
                'name' => 'Ayn Rand',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            67 => 
            array (
                'id' => 68,
                'qid' => 'Q165792',
                'name' => 'Edmund Burke',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            68 => 
            array (
                'id' => 69,
                'qid' => 'Q229646',
                'name' => 'G. E. M. Anscombe',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-12 22:44:22',
            ),
            69 => 
            array (
                'id' => 70,
                'qid' => 'Q235470',
                'name' => 'Martha Nussbaum',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-12 22:44:22',
            ),
            70 => 
            array (
                'id' => 71,
                'qid' => 'Q272615',
                'name' => 'J. L. Austin',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            71 => 
            array (
                'id' => 72,
                'qid' => 'Q275500',
                'name' => 'Jean Buridan',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            72 => 
            array (
                'id' => 73,
                'qid' => 'Q313929',
                'name' => 'Mortimer Jerome Adler',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            73 => 
            array (
                'id' => 74,
                'qid' => 'Q346523',
                'name' => 'Andrea Cesalpino',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-08 04:23:37',
            ),
            74 => 
            array (
                'id' => 75,
                'qid' => 'Q484141',
                'name' => 'Muhammad Iqbal',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            75 => 
            array (
                'id' => 76,
                'qid' => 'Q517390',
                'name' => 'Chantal Delsol',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-08 04:23:37',
            ),
            76 => 
            array (
                'id' => 77,
                'qid' => 'Q528415',
                'name' => 'Hasdai Crescas',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            77 => 
            array (
                'id' => 78,
                'qid' => 'Q4413029',
                'name' => 'Vasily Seseman',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:37',
                'updated_at' => '2018-08-08 04:23:37',
            ),
            78 => 
            array (
                'id' => 79,
                'qid' => 'Q1451251',
                'name' => 'François de La Mothe Le Vayer',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:39',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            79 => 
            array (
                'id' => 80,
                'qid' => 'Q192315',
                'name' => 'Pierre Gassendi',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:41',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            80 => 
            array (
                'id' => 81,
                'qid' => 'Q247016',
                'name' => 'André Comte-Sponville',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:41',
                'updated_at' => '2018-08-08 04:23:41',
            ),
            81 => 
            array (
                'id' => 82,
                'qid' => 'Q5749',
                'name' => 'Pierre-Joseph Proudhon',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:47',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            82 => 
            array (
                'id' => 83,
                'qid' => 'Q43499',
                'name' => 'Erasmus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:48',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            83 => 
            array (
                'id' => 84,
                'qid' => 'Q316347',
                'name' => 'Thomas Reid',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:48',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            84 => 
            array (
                'id' => 85,
                'qid' => 'Q1290',
                'name' => 'Blaise Pascal',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:51',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            85 => 
            array (
                'id' => 86,
                'qid' => 'Q184500',
                'name' => 'Johannes Scotus Eriugena',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:23:57',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            86 => 
            array (
                'id' => 87,
                'qid' => 'Q52101533',
                'name' => 'Todros Todrosi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:03',
                'updated_at' => '2018-08-08 04:24:03',
            ),
            87 => 
            array (
                'id' => 88,
                'qid' => 'Q107473',
                'name' => 'Karl Barth',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:08',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            88 => 
            array (
                'id' => 89,
                'qid' => 'Q6533378',
                'name' => 'Mohammed ibn Hajj al-Tilimsani',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:10',
                'updated_at' => '2018-08-08 04:24:10',
            ),
            89 => 
            array (
                'id' => 90,
                'qid' => 'Q1040738',
                'name' => 'Javed Ahmad Ghamidi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:14',
                'updated_at' => '2018-08-08 04:24:14',
            ),
            90 => 
            array (
                'id' => 91,
                'qid' => 'Q29629061',
                'name' => 'Nunu Geladze',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:16',
                'updated_at' => '2018-08-08 04:24:16',
            ),
            91 => 
            array (
                'id' => 92,
                'qid' => 'Q12807',
                'name' => 'Umberto Eco',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:20',
                'updated_at' => '2018-08-08 04:24:20',
            ),
            92 => 
            array (
                'id' => 93,
                'qid' => 'Q176909',
                'name' => 'Walker Percy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:20',
                'updated_at' => '2018-08-08 04:24:20',
            ),
            93 => 
            array (
                'id' => 94,
                'qid' => 'Q10337407',
                'name' => 'Norman Geisler',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:20',
                'updated_at' => '2018-08-08 04:24:20',
            ),
            94 => 
            array (
                'id' => 95,
                'qid' => 'Q29439790',
                'name' => 'Joan Roig Gironella',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:20',
                'updated_at' => '2018-08-08 04:24:20',
            ),
            95 => 
            array (
                'id' => 96,
                'qid' => 'Q1332482',
                'name' => 'Josep Palau i Fabre',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:23',
                'updated_at' => '2018-08-08 04:24:23',
            ),
            96 => 
            array (
                'id' => 97,
                'qid' => 'Q3311112',
                'name' => 'Mihai Vâlsan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:24',
                'updated_at' => '2018-08-08 04:24:24',
            ),
            97 => 
            array (
                'id' => 98,
                'qid' => 'Q184226',
                'name' => 'Gilles Deleuze',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:25',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            98 => 
            array (
                'id' => 99,
                'qid' => 'Q213220',
                'name' => 'Aldus Manutius',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:37',
                'updated_at' => '2018-08-08 04:24:37',
            ),
            99 => 
            array (
                'id' => 100,
                'qid' => 'Q860619',
                'name' => 'Harvey Mansfield',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:39',
                'updated_at' => '2018-08-08 04:24:39',
            ),
            100 => 
            array (
                'id' => 101,
                'qid' => 'Q3592370',
                'name' => 'Étienne Tassin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:39',
                'updated_at' => '2018-08-08 04:24:39',
            ),
            101 => 
            array (
                'id' => 102,
                'qid' => 'Q7759730',
                'name' => 'The Reason of State',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:39',
                'updated_at' => '2018-08-08 04:24:39',
            ),
            102 => 
            array (
                'id' => 103,
                'qid' => 'Q314189',
                'name' => 'Lev Shestov',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:41',
                'updated_at' => '2018-08-08 04:24:41',
            ),
            103 => 
            array (
                'id' => 104,
                'qid' => 'Q355201',
                'name' => 'Alvin Plantinga',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:44',
                'updated_at' => '2018-08-09 01:07:09',
            ),
            104 => 
            array (
                'id' => 105,
                'qid' => 'Q5584986',
                'name' => 'Gordon Clark',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:44',
                'updated_at' => '2018-08-08 04:24:44',
            ),
            105 => 
            array (
                'id' => 106,
                'qid' => 'Q311145',
                'name' => 'Joaquim Maria Machado de Assis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:45',
                'updated_at' => '2018-08-08 04:24:45',
            ),
            106 => 
            array (
                'id' => 107,
                'qid' => 'Q553128',
                'name' => 'Lucilio Vanini',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:47',
                'updated_at' => '2018-08-08 04:24:47',
            ),
            107 => 
            array (
                'id' => 108,
                'qid' => 'Q43393',
                'name' => 'Robert Boyle',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:50',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            108 => 
            array (
                'id' => 109,
                'qid' => 'Q93343',
                'name' => 'Percy Bysshe Shelley',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:50',
                'updated_at' => '2018-08-08 04:24:50',
            ),
            109 => 
            array (
                'id' => 110,
                'qid' => 'Q315362',
                'name' => 'Ben Okri',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:50',
                'updated_at' => '2018-08-08 04:24:50',
            ),
            110 => 
            array (
                'id' => 111,
                'qid' => 'Q1386165',
                'name' => 'Felix Adler',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:50',
                'updated_at' => '2018-08-08 04:24:50',
            ),
            111 => 
            array (
                'id' => 112,
                'qid' => 'Q102490',
                'name' => 'Evangelista Torricelli',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:51',
                'updated_at' => '2018-08-08 04:24:51',
            ),
            112 => 
            array (
                'id' => 113,
                'qid' => 'Q935',
                'name' => 'Isaac Newton',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:24:59',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            113 => 
            array (
                'id' => 114,
                'qid' => 'Q9353',
                'name' => 'John Locke',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:00',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            114 => 
            array (
                'id' => 115,
                'qid' => 'Q58586',
                'name' => 'Edmund Husserl',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:00',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            115 => 
            array (
                'id' => 116,
                'qid' => 'Q309818',
                'name' => 'Nicolas Malebranche',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:00',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            116 => 
            array (
                'id' => 117,
                'qid' => 'Q85142',
                'name' => 'Kurt Baier',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:02',
                'updated_at' => '2018-08-08 04:25:02',
            ),
            117 => 
            array (
                'id' => 118,
                'qid' => 'Q103114',
                'name' => 'Michel Houellebecq',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:07',
                'updated_at' => '2018-08-08 04:25:07',
            ),
            118 => 
            array (
                'id' => 119,
                'qid' => 'Q125249',
                'name' => 'William James',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:07',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            119 => 
            array (
                'id' => 120,
                'qid' => 'Q140694',
                'name' => 'Alexis de Tocqueville',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:07',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            120 => 
            array (
                'id' => 121,
                'qid' => 'Q314172',
                'name' => 'Pierre Duhem',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:07',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            121 => 
            array (
                'id' => 122,
                'qid' => 'Q353887',
                'name' => 'Antoine Arnauld',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:07',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            122 => 
            array (
                'id' => 123,
                'qid' => 'Q951066',
                'name' => 'Léon Brunschvicg',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:07',
                'updated_at' => '2018-08-08 04:25:07',
            ),
            123 => 
            array (
                'id' => 124,
                'qid' => 'Q30143889',
                'name' => 'Pierre Raymond',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:07',
                'updated_at' => '2018-08-08 04:25:07',
            ),
            124 => 
            array (
                'id' => 125,
                'qid' => 'Q937',
                'name' => 'Albert Einstein',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-08 04:25:15',
            ),
            125 => 
            array (
                'id' => 126,
                'qid' => 'Q33760',
                'name' => 'Bertrand Russell',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            126 => 
            array (
                'id' => 127,
                'qid' => 'Q38873',
                'name' => 'Lou Andreas-Salomé',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-12 22:44:22',
            ),
            127 => 
            array (
                'id' => 128,
                'qid' => 'Q60070',
                'name' => 'Friedrich Wilhelm Joseph Schelling',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            128 => 
            array (
                'id' => 129,
                'qid' => 'Q155547',
                'name' => 'Johann Gottfried Herder',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-08 04:25:15',
            ),
            129 => 
            array (
                'id' => 130,
                'qid' => 'Q168004',
                'name' => 'Friedrich Heinrich Jacobi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-08 04:25:15',
            ),
            130 => 
            array (
                'id' => 131,
                'qid' => 'Q184169',
                'name' => 'Louis Althusser',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            131 => 
            array (
                'id' => 132,
                'qid' => 'Q310341',
                'name' => 'Antonio Negri',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-08 04:25:15',
            ),
            132 => 
            array (
                'id' => 133,
                'qid' => 'Q311772',
                'name' => 'Sapariuc Catalin',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            133 => 
            array (
                'id' => 134,
                'qid' => 'Q766723',
                'name' => 'Rebecca Goldstein',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:15',
                'updated_at' => '2018-08-08 04:25:15',
            ),
            134 => 
            array (
                'id' => 135,
                'qid' => 'Q37160',
                'name' => 'David Hume',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:17',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            135 => 
            array (
                'id' => 136,
                'qid' => 'Q82049',
                'name' => 'George Berkeley',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:17',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            136 => 
            array (
                'id' => 137,
                'qid' => 'Q172544',
                'name' => 'John Rawls',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:17',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            137 => 
            array (
                'id' => 138,
                'qid' => 'Q310791',
                'name' => 'Jules Michelet',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:17',
                'updated_at' => '2018-08-08 04:25:17',
            ),
            138 => 
            array (
                'id' => 139,
                'qid' => 'Q313073',
                'name' => 'Jonathan Edwards',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:17',
                'updated_at' => '2018-08-08 04:25:17',
            ),
            139 => 
            array (
                'id' => 140,
                'qid' => 'Q310903',
                'name' => 'Neil deGrasse Tyson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:20',
                'updated_at' => '2018-08-08 04:25:20',
            ),
            140 => 
            array (
                'id' => 141,
                'qid' => 'Q76510',
                'name' => 'Christian Wolff',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:25',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            141 => 
            array (
                'id' => 142,
                'qid' => 'Q334147',
                'name' => 'Julius Evola',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:28',
                'updated_at' => '2018-08-08 04:25:28',
            ),
            142 => 
            array (
                'id' => 143,
                'qid' => 'Q58720',
                'name' => 'Mikhail Lomonosov',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:33',
                'updated_at' => '2018-08-08 04:25:33',
            ),
            143 => 
            array (
                'id' => 144,
                'qid' => 'Q112176',
                'name' => 'Ernst von Glasersfeld',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:37',
                'updated_at' => '2018-08-08 04:25:37',
            ),
            144 => 
            array (
                'id' => 145,
                'qid' => 'Q187520',
                'name' => 'Charles Sanders Peirce',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:37',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            145 => 
            array (
                'id' => 146,
                'qid' => 'Q15948',
                'name' => 'Émile Durkheim',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:40',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            146 => 
            array (
                'id' => 147,
                'qid' => 'Q160640',
                'name' => 'Raymond Aron',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:40',
                'updated_at' => '2018-08-08 04:25:40',
            ),
            147 => 
            array (
                'id' => 148,
                'qid' => 'Q161841',
                'name' => 'Edward Gibbon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:40',
                'updated_at' => '2018-08-08 04:25:40',
            ),
            148 => 
            array (
                'id' => 149,
                'qid' => 'Q183094',
                'name' => 'Adam Ferguson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:40',
                'updated_at' => '2018-08-08 04:25:40',
            ),
            149 => 
            array (
                'id' => 150,
                'qid' => 'Q271666',
                'name' => 'James Mill',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:46',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            150 => 
            array (
                'id' => 151,
                'qid' => 'Q1064',
                'name' => 'Alessandro Manzoni',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:48',
                'updated_at' => '2018-08-08 04:25:48',
            ),
            151 => 
            array (
                'id' => 152,
                'qid' => 'Q7200',
                'name' => 'Alexander Pushkin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:48',
                'updated_at' => '2018-08-08 04:25:48',
            ),
            152 => 
            array (
                'id' => 153,
                'qid' => 'Q125879',
                'name' => 'William Alston',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:49',
                'updated_at' => '2018-08-08 04:25:49',
            ),
            153 => 
            array (
                'id' => 154,
                'qid' => 'Q1035',
                'name' => 'Charles Darwin',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:50',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            154 => 
            array (
                'id' => 155,
                'qid' => 'Q298521',
                'name' => 'Saul Kripke',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:50',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            155 => 
            array (
                'id' => 156,
                'qid' => 'Q4769048',
                'name' => 'Annette Baier',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:50',
                'updated_at' => '2018-08-12 22:44:22',
            ),
            156 => 
            array (
                'id' => 157,
                'qid' => 'Q7724',
                'name' => 'August Strindberg',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:52',
                'updated_at' => '2018-08-08 04:25:52',
            ),
            157 => 
            array (
                'id' => 158,
                'qid' => 'Q13526',
                'name' => 'Thomas Robert Malthus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:52',
                'updated_at' => '2018-08-08 04:25:52',
            ),
            158 => 
            array (
                'id' => 159,
                'qid' => 'Q27645',
                'name' => 'Mikhail Bakunin',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:52',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            159 => 
            array (
                'id' => 160,
                'qid' => 'Q102585',
                'name' => 'Johann Gottlieb Fichte',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:52',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            160 => 
            array (
                'id' => 161,
                'qid' => 'Q105428',
                'name' => 'Johann Heinrich Pestalozzi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:52',
                'updated_at' => '2018-08-08 04:25:52',
            ),
            161 => 
            array (
                'id' => 162,
                'qid' => 'Q712946',
                'name' => 'Jacques Barzun',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:53',
                'updated_at' => '2018-08-08 04:25:53',
            ),
            162 => 
            array (
                'id' => 163,
                'qid' => 'Q20968412',
                'name' => 'Marina Garcés',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:53',
                'updated_at' => '2018-08-08 04:25:53',
            ),
            163 => 
            array (
                'id' => 164,
                'qid' => 'Q47426',
                'name' => 'Milton Friedman',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:25:59',
                'updated_at' => '2018-08-08 04:25:59',
            ),
            164 => 
            array (
                'id' => 165,
                'qid' => 'Q991',
                'name' => 'Fyodor Dostoyevsky',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-08 04:26:02',
            ),
            165 => 
            array (
                'id' => 166,
                'qid' => 'Q22670',
                'name' => 'Friedrich Schiller',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            166 => 
            array (
                'id' => 167,
                'qid' => 'Q37767',
                'name' => 'T. S. Eliot',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-08 04:26:02',
            ),
            167 => 
            array (
                'id' => 168,
                'qid' => 'Q44272',
                'name' => 'Michel Foucault',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            168 => 
            array (
                'id' => 169,
                'qid' => 'Q76519',
                'name' => 'Rudolf Carnap',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            169 => 
            array (
                'id' => 170,
                'qid' => 'Q78891',
                'name' => 'Hugo Bergmann',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-08 04:26:02',
            ),
            170 => 
            array (
                'id' => 171,
                'qid' => 'Q157318',
                'name' => 'Leszek Kołakowski',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-08 04:26:02',
            ),
            171 => 
            array (
                'id' => 172,
                'qid' => 'Q184656',
                'name' => 'Nicolai Berdyaev',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            172 => 
            array (
                'id' => 173,
                'qid' => 'Q184750',
                'name' => 'Slavoj Žižek',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            173 => 
            array (
                'id' => 174,
                'qid' => 'Q2915527',
                'name' => 'Monroe Beardsley',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-08 04:26:02',
            ),
            174 => 
            array (
                'id' => 175,
                'qid' => 'Q3513783',
                'name' => 'Francis Ellingwood Abbot',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-08 04:26:02',
            ),
            175 => 
            array (
                'id' => 176,
                'qid' => 'Q7609759',
                'name' => 'Stephen Law',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:02',
                'updated_at' => '2018-08-08 04:26:02',
            ),
            176 => 
            array (
                'id' => 177,
                'qid' => 'Q44403',
                'name' => 'Heinrich Heine',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:04',
                'updated_at' => '2018-08-08 04:26:04',
            ),
            177 => 
            array (
                'id' => 178,
                'qid' => 'Q378098',
                'name' => 'William F. Buckley, Jr.',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:05',
                'updated_at' => '2018-08-08 04:26:05',
            ),
            178 => 
            array (
                'id' => 179,
                'qid' => 'Q38191268',
                'name' => 'Laetitia Strauch-Bonart',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:05',
                'updated_at' => '2018-08-08 04:26:05',
            ),
            179 => 
            array (
                'id' => 180,
                'qid' => 'Q49081',
                'name' => 'Christopher Hitchens',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:07',
                'updated_at' => '2018-08-08 04:26:07',
            ),
            180 => 
            array (
                'id' => 181,
                'qid' => 'Q533505',
                'name' => 'Wendell Berry',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:07',
                'updated_at' => '2018-08-08 04:26:07',
            ),
            181 => 
            array (
                'id' => 182,
                'qid' => 'Q159636',
                'name' => 'Joseph Priestley',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:08',
                'updated_at' => '2018-08-08 04:26:08',
            ),
            182 => 
            array (
                'id' => 183,
                'qid' => 'Q190302',
                'name' => 'Claude Adrien Helvétius',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:08',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            183 => 
            array (
                'id' => 184,
                'qid' => 'Q223723',
                'name' => 'Cesare Beccaria',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:08',
                'updated_at' => '2018-08-08 04:26:08',
            ),
            184 => 
            array (
                'id' => 185,
                'qid' => 'Q41513',
                'name' => 'William Blake',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:12',
                'updated_at' => '2018-08-08 04:26:12',
            ),
            185 => 
            array (
                'id' => 186,
                'qid' => 'Q79969',
                'name' => 'Emma Goldman',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:12',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            186 => 
            array (
                'id' => 187,
                'qid' => 'Q103591',
                'name' => 'Germaine Greer',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:12',
                'updated_at' => '2018-08-12 22:44:22',
            ),
            187 => 
            array (
                'id' => 188,
                'qid' => 'Q1031',
                'name' => 'France Prešeren',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:13',
                'updated_at' => '2018-08-08 04:26:13',
            ),
            188 => 
            array (
                'id' => 189,
                'qid' => 'Q316806',
                'name' => 'Almeida Garrett',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:13',
                'updated_at' => '2018-08-08 04:26:13',
            ),
            189 => 
            array (
                'id' => 190,
                'qid' => 'Q2564908',
                'name' => 'Alexandre Soumet',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:13',
                'updated_at' => '2018-08-08 04:26:13',
            ),
            190 => 
            array (
                'id' => 191,
                'qid' => 'Q61723',
                'name' => 'Gustav Landauer',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:14',
                'updated_at' => '2018-08-08 04:26:14',
            ),
            191 => 
            array (
                'id' => 192,
                'qid' => 'Q501',
                'name' => 'Charles Baudelaire',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:17',
                'updated_at' => '2018-08-08 04:26:17',
            ),
            192 => 
            array (
                'id' => 193,
                'qid' => 'Q15981056',
                'name' => 'Panagiotis Sophianopoulos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:18',
                'updated_at' => '2018-08-08 04:26:18',
            ),
            193 => 
            array (
                'id' => 194,
                'qid' => 'Q1394',
                'name' => 'Vladimir Lenin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            194 => 
            array (
                'id' => 195,
                'qid' => 'Q9061',
                'name' => 'Karl Marx',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            195 => 
            array (
                'id' => 196,
                'qid' => 'Q9364',
                'name' => 'Jean-Paul Sartre',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            196 => 
            array (
                'id' => 197,
                'qid' => 'Q62977',
                'name' => 'Walter Kaufmann',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            197 => 
            array (
                'id' => 198,
                'qid' => 'Q76422',
                'name' => 'Ludwig Feuerbach',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            198 => 
            array (
                'id' => 199,
                'qid' => 'Q76725',
                'name' => 'Max Stirner',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            199 => 
            array (
                'id' => 200,
                'qid' => 'Q128126',
                'name' => 'Claude Lévi-Strauss',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            200 => 
            array (
                'id' => 201,
                'qid' => 'Q152388',
                'name' => 'Theodor W. Adorno',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            201 => 
            array (
                'id' => 202,
                'qid' => 'Q192348',
                'name' => 'Benedetto Croce',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            202 => 
            array (
                'id' => 203,
                'qid' => 'Q207359',
                'name' => 'Georges Bataille',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            203 => 
            array (
                'id' => 204,
                'qid' => 'Q312295',
                'name' => 'Giovanni Gentile',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            204 => 
            array (
                'id' => 205,
                'qid' => 'Q342730',
                'name' => 'Antonio Labriola',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            205 => 
            array (
                'id' => 206,
                'qid' => 'Q347362',
                'name' => 'Fredric Jameson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            206 => 
            array (
                'id' => 207,
                'qid' => 'Q432690',
                'name' => 'Catherine Malabou',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            207 => 
            array (
                'id' => 208,
                'qid' => 'Q463553',
                'name' => 'J. M. E. McTaggart',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            208 => 
            array (
                'id' => 209,
                'qid' => 'Q540407',
                'name' => 'Jean Hyppolite',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            209 => 
            array (
                'id' => 210,
                'qid' => 'Q572741',
                'name' => 'Kwame Anthony Appiah',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            210 => 
            array (
                'id' => 211,
                'qid' => 'Q1680038',
                'name' => 'James Black Baillie',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            211 => 
            array (
                'id' => 212,
                'qid' => 'Q2200215',
                'name' => 'R.F. Beerling',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            212 => 
            array (
                'id' => 213,
                'qid' => 'Q3707183',
                'name' => 'Diego Fusaro',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            213 => 
            array (
                'id' => 214,
                'qid' => 'Q10392247',
                'name' => 'Vladimir Safatle',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            214 => 
            array (
                'id' => 215,
                'qid' => 'Q11705519',
                'name' => 'Ángel Amor Ruibal',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            215 => 
            array (
                'id' => 216,
                'qid' => 'Q19974589',
                'name' => 'Yevgeny Edelson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            216 => 
            array (
                'id' => 217,
                'qid' => 'Q26043406',
                'name' => 'Kohei Saito',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:22',
                'updated_at' => '2018-08-08 04:26:22',
            ),
            217 => 
            array (
                'id' => 218,
                'qid' => 'Q332535',
                'name' => 'Sergei Bulgakov',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:24',
                'updated_at' => '2018-08-08 04:26:24',
            ),
            218 => 
            array (
                'id' => 219,
                'qid' => 'Q8814',
                'name' => 'Augustin-Louis Cauchy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:25',
                'updated_at' => '2018-08-08 04:26:25',
            ),
            219 => 
            array (
                'id' => 220,
                'qid' => 'Q57497',
                'name' => 'Carl Stumpf',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:25',
                'updated_at' => '2018-08-08 04:26:25',
            ),
            220 => 
            array (
                'id' => 221,
                'qid' => 'Q60028',
                'name' => 'Gottlob Frege',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:25',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            221 => 
            array (
                'id' => 222,
                'qid' => 'Q350124',
                'name' => 'Kevin Mulligan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:25',
                'updated_at' => '2018-08-08 04:26:25',
            ),
            222 => 
            array (
                'id' => 223,
                'qid' => 'Q1511',
                'name' => 'Richard Wagner',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-08 04:26:27',
            ),
            223 => 
            array (
                'id' => 224,
                'qid' => 'Q9391',
                'name' => 'Ludwig Wittgenstein',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            224 => 
            array (
                'id' => 225,
                'qid' => 'Q40826',
                'name' => 'Knut Hamsun',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-08 04:26:27',
            ),
            225 => 
            array (
                'id' => 226,
                'qid' => 'Q105756',
                'name' => 'John Updike',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-08 04:26:27',
            ),
            226 => 
            array (
                'id' => 227,
                'qid' => 'Q326909',
                'name' => 'Buddenbrooks',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-08 04:26:27',
            ),
            227 => 
            array (
                'id' => 228,
                'qid' => 'Q712420',
                'name' => 'Otokar Březina',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-08 04:26:27',
            ),
            228 => 
            array (
                'id' => 229,
                'qid' => 'Q769887',
                'name' => 'Augusto dos Anjos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-08 04:26:27',
            ),
            229 => 
            array (
                'id' => 230,
                'qid' => 'Q1324254',
                'name' => 'Tristan und Isolde',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:27',
                'updated_at' => '2018-08-08 04:26:27',
            ),
            230 => 
            array (
                'id' => 231,
                'qid' => 'Q4441',
                'name' => 'Emily Dickinson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            231 => 
            array (
                'id' => 232,
                'qid' => 'Q15809',
                'name' => 'Ivan Cankar',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            232 => 
            array (
                'id' => 233,
                'qid' => 'Q78487',
                'name' => 'Robert Musil',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            233 => 
            array (
                'id' => 234,
                'qid' => 'Q81438',
                'name' => 'Walt Whitman',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            234 => 
            array (
                'id' => 235,
                'qid' => 'Q131149',
                'name' => 'Henry David Thoreau',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            235 => 
            array (
                'id' => 236,
                'qid' => 'Q168728',
                'name' => 'Robert Frost',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            236 => 
            array (
                'id' => 237,
                'qid' => 'Q257953',
                'name' => 'Margaret Fuller',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            237 => 
            array (
                'id' => 238,
                'qid' => 'Q274891',
                'name' => 'Émile Armand',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            238 => 
            array (
                'id' => 239,
                'qid' => 'Q345612',
                'name' => 'Harold Bloom',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            239 => 
            array (
                'id' => 240,
                'qid' => 'Q1064881',
                'name' => 'Charles Holden',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            240 => 
            array (
                'id' => 241,
                'qid' => 'Q18393728',
                'name' => 'Receptivity',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:32',
                'updated_at' => '2018-08-08 04:26:32',
            ),
            241 => 
            array (
                'id' => 242,
                'qid' => 'Q380443',
                'name' => 'Alain Finkielkraut',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:35',
                'updated_at' => '2018-08-08 04:26:35',
            ),
            242 => 
            array (
                'id' => 243,
                'qid' => 'Q690477',
                'name' => 'Saul Newman',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:36',
                'updated_at' => '2018-08-08 04:26:36',
            ),
            243 => 
            array (
                'id' => 244,
                'qid' => 'Q131112',
                'name' => 'Paul Krugman',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:38',
                'updated_at' => '2018-08-08 04:26:38',
            ),
            244 => 
            array (
                'id' => 245,
                'qid' => 'Q207478',
                'name' => 'Alfred Binet',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:38',
                'updated_at' => '2018-08-08 04:26:38',
            ),
            245 => 
            array (
                'id' => 246,
                'qid' => 'Q3453681',
                'name' => 'Ruwen Ogien',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:38',
                'updated_at' => '2018-08-08 04:26:38',
            ),
            246 => 
            array (
                'id' => 247,
                'qid' => 'Q347118',
                'name' => 'Hristo Botev',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:39',
                'updated_at' => '2018-08-08 04:26:39',
            ),
            247 => 
            array (
                'id' => 248,
                'qid' => 'Q637206',
                'name' => 'Henri Tolain',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:40',
                'updated_at' => '2018-08-08 04:26:40',
            ),
            248 => 
            array (
                'id' => 249,
                'qid' => 'Q925403',
                'name' => 'Giovanni Rossi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:40',
                'updated_at' => '2018-08-08 04:26:40',
            ),
            249 => 
            array (
                'id' => 250,
                'qid' => 'Q44461',
                'name' => 'Richard Dawkins',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:41',
                'updated_at' => '2018-08-08 04:26:41',
            ),
            250 => 
            array (
                'id' => 251,
                'qid' => 'Q184366',
                'name' => 'Thomas Henry Huxley',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:41',
                'updated_at' => '2018-08-08 04:26:41',
            ),
            251 => 
            array (
                'id' => 252,
                'qid' => 'Q983825',
                'name' => 'George John Romanes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:41',
                'updated_at' => '2018-08-08 04:26:41',
            ),
            252 => 
            array (
                'id' => 253,
                'qid' => 'Q1333425',
                'name' => 'Francis Darwin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:41',
                'updated_at' => '2018-08-08 04:26:41',
            ),
            253 => 
            array (
                'id' => 254,
                'qid' => 'Q18668276',
                'name' => 'Endless Forms Most Beautiful',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:41',
                'updated_at' => '2018-08-08 04:26:41',
            ),
            254 => 
            array (
                'id' => 255,
                'qid' => 'Q34670',
                'name' => 'Albert Camus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:44',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            255 => 
            array (
                'id' => 256,
                'qid' => 'Q36661',
                'name' => 'Henrik Ibsen',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:44',
                'updated_at' => '2018-08-08 04:26:44',
            ),
            256 => 
            array (
                'id' => 257,
                'qid' => 'Q178698',
                'name' => 'W. H. Auden',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:44',
                'updated_at' => '2018-08-08 04:26:44',
            ),
            257 => 
            array (
                'id' => 258,
                'qid' => 'Q971585',
                'name' => 'Hubert Dreyfus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:44',
                'updated_at' => '2018-08-08 04:26:44',
            ),
            258 => 
            array (
                'id' => 259,
                'qid' => 'Q1001',
                'name' => 'Mahatma Gandhi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:45',
                'updated_at' => '2018-08-08 04:26:45',
            ),
            259 => 
            array (
                'id' => 260,
                'qid' => 'Q8027',
                'name' => 'Martin Luther King Jr.',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:45',
                'updated_at' => '2018-10-29 04:17:26',
            ),
            260 => 
            array (
                'id' => 261,
                'qid' => 'Q19185',
                'name' => 'George Bernard Shaw',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:45',
                'updated_at' => '2018-08-08 04:26:45',
            ),
            261 => 
            array (
                'id' => 262,
                'qid' => 'Q3048826',
                'name' => 'Edwin Way Teale',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:45',
                'updated_at' => '2018-08-08 04:26:45',
            ),
            262 => 
            array (
                'id' => 263,
                'qid' => 'Q21810649',
                'name' => 'Norton Bush',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:45',
                'updated_at' => '2018-08-08 04:26:45',
            ),
            263 => 
            array (
                'id' => 264,
                'qid' => 'Q259507',
                'name' => 'bell hooks',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:47',
                'updated_at' => '2018-08-08 04:26:47',
            ),
            264 => 
            array (
                'id' => 265,
                'qid' => 'Q855',
                'name' => 'Joseph Stalin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            265 => 
            array (
                'id' => 266,
                'qid' => 'Q61078',
                'name' => 'Walter Benjamin',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            266 => 
            array (
                'id' => 267,
                'qid' => 'Q128494',
                'name' => 'Lyubov Axelrod',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            267 => 
            array (
                'id' => 268,
                'qid' => 'Q179109',
                'name' => 'Roland Barthes',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            268 => 
            array (
                'id' => 269,
                'qid' => 'Q182847',
                'name' => 'Jean Baudrillard',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            269 => 
            array (
                'id' => 270,
                'qid' => 'Q212639',
                'name' => 'Maurice Merleau-Ponty',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            270 => 
            array (
                'id' => 271,
                'qid' => 'Q289333',
                'name' => 'Étienne Balibar',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            271 => 
            array (
                'id' => 272,
                'qid' => 'Q315349',
                'name' => 'Terry Eagleton',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            272 => 
            array (
                'id' => 273,
                'qid' => 'Q376036',
                'name' => 'Svetozar Marković',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            273 => 
            array (
                'id' => 274,
                'qid' => 'Q505296',
                'name' => 'Nicos Poulantzas',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            274 => 
            array (
                'id' => 275,
                'qid' => 'Q704931',
                'name' => 'Edmund Wilson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            275 => 
            array (
                'id' => 276,
                'qid' => 'Q947456',
                'name' => 'Sidney Hook',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            276 => 
            array (
                'id' => 277,
                'qid' => 'Q2897924',
                'name' => 'Bernard Friot',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            277 => 
            array (
                'id' => 278,
                'qid' => 'Q2939300',
                'name' => 'Carlos Astrada',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            278 => 
            array (
                'id' => 279,
                'qid' => 'Q3351937',
                'name' => 'Rahul Sankrityayan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            279 => 
            array (
                'id' => 280,
                'qid' => 'Q4059000',
                'name' => 'Aisiqi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:52',
                'updated_at' => '2018-08-08 04:26:52',
            ),
            280 => 
            array (
                'id' => 281,
                'qid' => 'Q220008',
                'name' => 'Anthony Giddens, Baron Giddens',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:57',
                'updated_at' => '2018-08-08 04:26:57',
            ),
            281 => 
            array (
                'id' => 282,
                'qid' => 'Q379900',
                'name' => 'Samuel Alexander',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:26:59',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            282 => 
            array (
                'id' => 283,
                'qid' => 'Q13529',
                'name' => 'Alfred Marshall',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:00',
                'updated_at' => '2018-08-08 04:27:00',
            ),
            283 => 
            array (
                'id' => 284,
                'qid' => 'Q9036',
                'name' => 'Nikola Tesla',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:01',
                'updated_at' => '2018-08-08 04:27:01',
            ),
            284 => 
            array (
                'id' => 285,
                'qid' => 'Q78570',
                'name' => 'Otto Neurath',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:01',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            285 => 
            array (
                'id' => 286,
                'qid' => 'Q58853',
                'name' => 'Karl-Otto Apel',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:03',
                'updated_at' => '2018-08-08 04:27:03',
            ),
            286 => 
            array (
                'id' => 287,
                'qid' => 'Q3173010',
                'name' => 'Susan Haack',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:03',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            287 => 
            array (
                'id' => 288,
                'qid' => 'Q180619',
                'name' => 'Stephen Jay Gould',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:05',
                'updated_at' => '2018-08-08 04:27:05',
            ),
            288 => 
            array (
                'id' => 289,
                'qid' => 'Q181659',
                'name' => 'Ursula K. Le Guin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:05',
                'updated_at' => '2018-08-08 04:27:05',
            ),
            289 => 
            array (
                'id' => 290,
                'qid' => 'Q5577',
                'name' => 'Salvador Dali',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            290 => 
            array (
                'id' => 291,
                'qid' => 'Q101732',
                'name' => 'Oscar Levy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            291 => 
            array (
                'id' => 292,
                'qid' => 'Q120381',
                'name' => 'Colette Peignot',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            292 => 
            array (
                'id' => 293,
                'qid' => 'Q151164',
                'name' => 'André Malraux',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            293 => 
            array (
                'id' => 294,
                'qid' => 'Q270800',
                'name' => 'Gaston Bachelard',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            294 => 
            array (
                'id' => 295,
                'qid' => 'Q440100',
                'name' => 'Jonathan Lethem',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            295 => 
            array (
                'id' => 296,
                'qid' => 'Q1974975',
                'name' => 'Talal Asad',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            296 => 
            array (
                'id' => 297,
                'qid' => 'Q5601041',
                'name' => 'Lewis Call',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            297 => 
            array (
                'id' => 298,
                'qid' => 'Q5799573',
                'name' => 'Darío Sztajnszrajber',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            298 => 
            array (
                'id' => 299,
                'qid' => 'Q6276882',
                'name' => 'Jordan B. Peterson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-10-29 04:31:55',
            ),
            299 => 
            array (
                'id' => 300,
                'qid' => 'Q24008013',
                'name' => 'Dimitri Uchaneishvili',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            300 => 
            array (
                'id' => 301,
                'qid' => 'Q47089834',
                'name' => 'Hebdomeros',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:06',
                'updated_at' => '2018-08-08 04:27:06',
            ),
            301 => 
            array (
                'id' => 302,
                'qid' => 'Q105962',
                'name' => 'Maurice Allais',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:09',
                'updated_at' => '2018-08-08 04:27:09',
            ),
            302 => 
            array (
                'id' => 303,
                'qid' => 'Q1083378',
                'name' => 'Carlo Lottieri',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:09',
                'updated_at' => '2018-08-08 04:27:09',
            ),
            303 => 
            array (
                'id' => 304,
                'qid' => 'Q3398798',
                'name' => 'Richard Aaron',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:12',
                'updated_at' => '2018-08-08 04:27:12',
            ),
            304 => 
            array (
                'id' => 305,
                'qid' => 'Q327301',
                'name' => 'George David Birkhoff',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:17',
                'updated_at' => '2018-08-08 04:27:17',
            ),
            305 => 
            array (
                'id' => 306,
                'qid' => 'Q725642',
                'name' => 'Clarence Irving Lewis',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:18',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            306 => 
            array (
                'id' => 307,
                'qid' => 'Q1064777',
                'name' => 'Charles Hartshorne',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:18',
                'updated_at' => '2018-08-08 04:27:18',
            ),
            307 => 
            array (
                'id' => 308,
                'qid' => 'Q169906',
                'name' => 'Jacques Lacan',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:20',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            308 => 
            array (
                'id' => 309,
                'qid' => 'Q1476957',
                'name' => 'Geneva School',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:20',
                'updated_at' => '2018-08-08 04:27:20',
            ),
            309 => 
            array (
                'id' => 310,
                'qid' => 'Q12865228',
                'name' => 'Ivane Amirkhanashvili',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:20',
                'updated_at' => '2018-08-08 04:27:20',
            ),
            310 => 
            array (
                'id' => 311,
                'qid' => 'Q66061',
                'name' => 'Adolf Reinach',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-08 04:27:24',
            ),
            311 => 
            array (
                'id' => 312,
                'qid' => 'Q71263',
                'name' => 'Moritz Geiger',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-08 04:27:24',
            ),
            312 => 
            array (
                'id' => 313,
                'qid' => 'Q72074',
                'name' => 'Oskar Becker',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-08 04:27:24',
            ),
            313 => 
            array (
                'id' => 314,
                'qid' => 'Q72107',
                'name' => 'Alexander Pfänder',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-08 04:27:24',
            ),
            314 => 
            array (
                'id' => 315,
                'qid' => 'Q76521',
                'name' => 'Max Scheler',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            315 => 
            array (
                'id' => 316,
                'qid' => 'Q381720',
                'name' => 'Jan Patočka',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-08 04:27:24',
            ),
            316 => 
            array (
                'id' => 317,
                'qid' => 'Q2896505',
                'name' => 'Dan Zahavi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-08 04:27:24',
            ),
            317 => 
            array (
                'id' => 318,
                'qid' => 'Q3505892',
                'name' => 'Suzanne Bachelard',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:24',
                'updated_at' => '2018-08-08 04:27:24',
            ),
            318 => 
            array (
                'id' => 319,
                'qid' => 'Q3296918',
                'name' => 'John Anderson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:25',
                'updated_at' => '2018-08-08 04:27:25',
            ),
            319 => 
            array (
                'id' => 320,
                'qid' => 'Q192207',
                'name' => 'Aurobindo Ghosh',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:26',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            320 => 
            array (
                'id' => 321,
                'qid' => 'Q615119',
                'name' => 'Coriolano Alberini',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:26',
                'updated_at' => '2018-08-08 04:27:26',
            ),
            321 => 
            array (
                'id' => 322,
                'qid' => 'Q1345582',
                'name' => 'Gilbert Simondon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:26',
                'updated_at' => '2018-08-08 04:27:26',
            ),
            322 => 
            array (
                'id' => 323,
                'qid' => 'Q1022453',
                'name' => 'C. D. Broad',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:31',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            323 => 
            array (
                'id' => 324,
                'qid' => 'Q13580896',
                'name' => 'Frank Pick',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:31',
                'updated_at' => '2018-08-08 04:27:31',
            ),
            324 => 
            array (
                'id' => 325,
                'qid' => 'Q76849',
                'name' => 'Georg Simmel',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:33',
                'updated_at' => '2018-08-08 04:27:33',
            ),
            325 => 
            array (
                'id' => 326,
                'qid' => 'Q1050943',
                'name' => 'Catherine Colliot-Thélène',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:33',
                'updated_at' => '2018-08-08 04:27:33',
            ),
            326 => 
            array (
                'id' => 327,
                'qid' => 'Q3123596',
                'name' => 'Gérald Bronner',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:33',
                'updated_at' => '2018-08-08 04:27:33',
            ),
            327 => 
            array (
                'id' => 328,
                'qid' => 'Q42224222',
                'name' => 'George Poede',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:33',
                'updated_at' => '2018-08-08 04:27:33',
            ),
            328 => 
            array (
                'id' => 329,
                'qid' => 'Q332850',
                'name' => 'José Bergamín',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:34',
                'updated_at' => '2018-08-08 04:27:34',
            ),
            329 => 
            array (
                'id' => 330,
                'qid' => 'Q443403',
                'name' => 'José Martínez Ruiz',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:34',
                'updated_at' => '2018-10-29 04:37:05',
            ),
            330 => 
            array (
                'id' => 331,
                'qid' => 'Q86371',
                'name' => 'Gustav Bergmann',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:39',
                'updated_at' => '2018-08-08 04:27:39',
            ),
            331 => 
            array (
                'id' => 332,
                'qid' => 'Q4725710',
                'name' => 'Alice Ambrose',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:39',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            332 => 
            array (
                'id' => 333,
                'qid' => 'Q1047',
                'name' => 'Jawaharlal Nehru',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:43',
                'updated_at' => '2018-08-08 04:27:43',
            ),
            333 => 
            array (
                'id' => 334,
                'qid' => 'Q17714',
                'name' => 'Stephen Hawking',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:43',
                'updated_at' => '2018-08-08 04:27:43',
            ),
            334 => 
            array (
                'id' => 335,
                'qid' => 'Q102289',
                'name' => 'Buckminster Fuller',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:43',
                'updated_at' => '2018-08-08 04:27:43',
            ),
            335 => 
            array (
                'id' => 336,
                'qid' => 'Q215263',
                'name' => 'Daniel Dennett',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:43',
                'updated_at' => '2018-08-08 04:27:43',
            ),
            336 => 
            array (
                'id' => 337,
                'qid' => 'Q243757',
                'name' => 'A. J. Ayer',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:43',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            337 => 
            array (
                'id' => 338,
                'qid' => 'Q725239',
                'name' => 'Stephen Neale',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:43',
                'updated_at' => '2018-08-08 04:27:43',
            ),
            338 => 
            array (
                'id' => 339,
                'qid' => 'Q5661212',
                'name' => 'Harold J. Morowitz',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:51',
                'updated_at' => '2018-08-08 04:27:51',
            ),
            339 => 
            array (
                'id' => 340,
                'qid' => 'Q72790',
                'name' => 'Victoria Ocampo',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:56',
                'updated_at' => '2018-08-08 04:27:56',
            ),
            340 => 
            array (
                'id' => 341,
                'qid' => 'Q235134',
                'name' => 'María Zambrano',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:57',
                'updated_at' => '2018-08-08 04:27:57',
            ),
            341 => 
            array (
                'id' => 342,
                'qid' => 'Q19962938',
                'name' => 'Francisco Soler Grima',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:27:57',
                'updated_at' => '2018-08-08 04:27:57',
            ),
            342 => 
            array (
                'id' => 343,
                'qid' => 'Q433741',
                'name' => 'Georges Canguilhem',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:00',
                'updated_at' => '2018-08-08 04:28:00',
            ),
            343 => 
            array (
                'id' => 344,
                'qid' => 'Q764300',
                'name' => 'Dominique Lecourt',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:00',
                'updated_at' => '2018-08-08 04:28:00',
            ),
            344 => 
            array (
                'id' => 345,
                'qid' => 'Q358561',
                'name' => 'Reinhold Niebuhr',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:03',
                'updated_at' => '2018-08-08 04:28:03',
            ),
            345 => 
            array (
                'id' => 346,
                'qid' => 'Q295012',
                'name' => 'John Searle',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:05',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            346 => 
            array (
                'id' => 347,
                'qid' => 'Q472676',
                'name' => 'Stephen Toulmin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:05',
                'updated_at' => '2018-08-08 04:28:05',
            ),
            347 => 
            array (
                'id' => 348,
                'qid' => 'Q601275',
                'name' => 'John Wisdom',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:05',
                'updated_at' => '2018-08-08 04:28:05',
            ),
            348 => 
            array (
                'id' => 349,
                'qid' => 'Q1364813',
                'name' => 'Norman Malcolm',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:05',
                'updated_at' => '2018-08-08 04:28:05',
            ),
            349 => 
            array (
                'id' => 350,
                'qid' => 'Q7012460',
                'name' => 'New Wittgenstein',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:05',
                'updated_at' => '2018-08-08 04:28:05',
            ),
            350 => 
            array (
                'id' => 351,
                'qid' => 'Q57255',
                'name' => 'Hans Jonas',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-08 04:28:07',
            ),
            351 => 
            array (
                'id' => 352,
                'qid' => 'Q76356',
                'name' => 'Hans-Georg Gadamer',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            352 => 
            array (
                'id' => 353,
                'qid' => 'Q153034',
                'name' => 'Emmanuel Levinas',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            353 => 
            array (
                'id' => 354,
                'qid' => 'Q193257',
                'name' => 'Jean-François Lyotard',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-08 04:28:07',
            ),
            354 => 
            array (
                'id' => 355,
                'qid' => 'Q215258',
                'name' => 'Richard Rorty',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            355 => 
            array (
                'id' => 356,
                'qid' => 'Q693290',
                'name' => 'Luigi Pareyson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-08 04:28:07',
            ),
            356 => 
            array (
                'id' => 357,
                'qid' => 'Q1984757',
                'name' => 'Barbara Cassin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-08 04:28:07',
            ),
            357 => 
            array (
                'id' => 358,
                'qid' => 'Q5935914',
                'name' => 'Jorge Rivera Cruchaga',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:07',
                'updated_at' => '2018-08-08 04:28:07',
            ),
            358 => 
            array (
                'id' => 359,
                'qid' => 'Q3087837',
                'name' => 'Josep Fontana',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:08',
                'updated_at' => '2018-08-08 04:28:08',
            ),
            359 => 
            array (
                'id' => 360,
                'qid' => 'Q584382',
                'name' => 'Yehoshua Bar-Hillel',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:09',
                'updated_at' => '2018-08-08 04:28:09',
            ),
            360 => 
            array (
                'id' => 361,
                'qid' => 'Q45841521',
                'name' => 'Herbert G. Bohnert',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:09',
                'updated_at' => '2018-08-08 04:28:09',
            ),
            361 => 
            array (
                'id' => 362,
                'qid' => 'Q106265',
                'name' => 'Norbert Bolz',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:10',
                'updated_at' => '2018-08-08 04:28:10',
            ),
            362 => 
            array (
                'id' => 363,
                'qid' => 'Q306514',
                'name' => 'Abbie Hoffman',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:17',
                'updated_at' => '2018-08-08 04:28:17',
            ),
            363 => 
            array (
                'id' => 364,
                'qid' => 'Q20046888',
                'name' => 'Luis Filipe Barreto',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:22',
                'updated_at' => '2018-08-08 04:28:22',
            ),
            364 => 
            array (
                'id' => 365,
                'qid' => 'Q192592',
                'name' => 'Kenneth Arrow',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:25',
                'updated_at' => '2018-08-08 04:28:25',
            ),
            365 => 
            array (
                'id' => 366,
                'qid' => 'Q5628058',
                'name' => 'H. B. Acton',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:27',
                'updated_at' => '2018-08-08 04:28:27',
            ),
            366 => 
            array (
                'id' => 367,
                'qid' => 'Q154556',
                'name' => 'Karlheinz Stockhausen',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:30',
                'updated_at' => '2018-08-08 04:28:30',
            ),
            367 => 
            array (
                'id' => 368,
                'qid' => 'Q7197',
                'name' => 'Simone de Beauvoir',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            368 => 
            array (
                'id' => 369,
                'qid' => 'Q7833',
                'name' => 'Boris Vian',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            369 => 
            array (
                'id' => 370,
                'qid' => 'Q60735',
                'name' => 'Axel Honneth',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            370 => 
            array (
                'id' => 371,
                'qid' => 'Q80095',
                'name' => 'Kenzaburō Ōe',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            371 => 
            array (
                'id' => 372,
                'qid' => 'Q86575',
                'name' => 'Frithjof Bergmann',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            372 => 
            array (
                'id' => 373,
                'qid' => 'Q132589',
                'name' => 'Camilo José Cela',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            373 => 
            array (
                'id' => 374,
                'qid' => 'Q174210',
                'name' => 'Julio Cortázar',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            374 => 
            array (
                'id' => 375,
                'qid' => 'Q188176',
                'name' => 'William S. Burroughs',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            375 => 
            array (
                'id' => 376,
                'qid' => 'Q193670',
                'name' => 'Frantz Fanon',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            376 => 
            array (
                'id' => 377,
                'qid' => 'Q201538',
                'name' => 'Edward Said',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            377 => 
            array (
                'id' => 378,
                'qid' => 'Q214660',
                'name' => 'John Fowles',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            378 => 
            array (
                'id' => 379,
                'qid' => 'Q238584',
                'name' => 'R. D. Laing',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            379 => 
            array (
                'id' => 380,
                'qid' => 'Q311005',
                'name' => 'Alain Badiou',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            380 => 
            array (
                'id' => 381,
                'qid' => 'Q313509',
                'name' => 'Bernard-Henri Lévy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            381 => 
            array (
                'id' => 382,
                'qid' => 'Q365129',
                'name' => 'Arthur Danto Lindo',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            382 => 
            array (
                'id' => 383,
                'qid' => 'Q368831',
                'name' => 'Colin Wilson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            383 => 
            array (
                'id' => 384,
                'qid' => 'Q580695',
                'name' => 'Robert C. Solomon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            384 => 
            array (
                'id' => 385,
                'qid' => 'Q620732',
                'name' => 'Alexander Tarasov',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            385 => 
            array (
                'id' => 386,
                'qid' => 'Q631466',
                'name' => 'Benny Lévy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            386 => 
            array (
                'id' => 387,
                'qid' => 'Q929630',
                'name' => 'Franco Basaglia',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            387 => 
            array (
                'id' => 388,
                'qid' => 'Q1019186',
                'name' => 'Txillardegi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            388 => 
            array (
                'id' => 389,
                'qid' => 'Q1100280',
                'name' => 'Veno Taufer',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            389 => 
            array (
                'id' => 390,
                'qid' => 'Q2517990',
                'name' => 'Seyhan Kurt',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            390 => 
            array (
                'id' => 391,
                'qid' => 'Q3850939',
                'name' => 'Fernanda González',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            391 => 
            array (
                'id' => 392,
                'qid' => 'Q4746344',
                'name' => 'Amina Mama',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            392 => 
            array (
                'id' => 393,
                'qid' => 'Q4939864',
                'name' => 'Sissela Bok',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            393 => 
            array (
                'id' => 394,
                'qid' => 'Q5290990',
                'name' => 'Dominik Smole',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            394 => 
            array (
                'id' => 395,
                'qid' => 'Q5950521',
                'name' => 'Juan José Sebreli',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            395 => 
            array (
                'id' => 396,
                'qid' => 'Q6097521',
                'name' => 'Ivan Soll',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            396 => 
            array (
                'id' => 397,
                'qid' => 'Q6138416',
                'name' => 'James M. Edie',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            397 => 
            array (
                'id' => 398,
                'qid' => 'Q6446953',
                'name' => 'Kurt Oscar Weber',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            398 => 
            array (
                'id' => 399,
                'qid' => 'Q6536603',
                'name' => 'Lewis Gordon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            399 => 
            array (
                'id' => 400,
                'qid' => 'Q6769300',
                'name' => 'Mark Poster',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            400 => 
            array (
                'id' => 401,
                'qid' => 'Q7150861',
                'name' => 'Paul Georgescu',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            401 => 
            array (
                'id' => 402,
                'qid' => 'Q7174493',
                'name' => 'Peter Hallward',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            402 => 
            array (
                'id' => 403,
                'qid' => 'Q7547623',
                'name' => 'Snell Putney',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            403 => 
            array (
                'id' => 404,
                'qid' => 'Q7838483',
                'name' => 'Trent Zelazny',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            404 => 
            array (
                'id' => 405,
                'qid' => 'Q12730072',
                'name' => 'Horia Gârbea',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            405 => 
            array (
                'id' => 406,
                'qid' => 'Q15443196',
                'name' => 'Tim White-Sobieski',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            406 => 
            array (
                'id' => 407,
                'qid' => 'Q16106359',
                'name' => 'Subimal Mishra',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            407 => 
            array (
                'id' => 408,
                'qid' => 'Q21027280',
                'name' => 'Natalia Magnat',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:32',
                'updated_at' => '2018-08-08 04:28:32',
            ),
            408 => 
            array (
                'id' => 409,
                'qid' => 'Q181',
                'name' => 'Jimmy Wales',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:36',
                'updated_at' => '2018-08-08 04:28:36',
            ),
            409 => 
            array (
                'id' => 410,
                'qid' => 'Q1235503',
                'name' => 'Leonard Peikoff',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:36',
                'updated_at' => '2018-08-08 04:28:36',
            ),
            410 => 
            array (
                'id' => 411,
                'qid' => 'Q84186',
                'name' => 'Ivan Illich',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            411 => 
            array (
                'id' => 412,
                'qid' => 'Q459310',
                'name' => 'Hamid Dabashi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            412 => 
            array (
                'id' => 413,
                'qid' => 'Q516614',
                'name' => 'Bracha L. Ettinger',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            413 => 
            array (
                'id' => 414,
                'qid' => 'Q923743',
                'name' => 'Simon Critchley',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            414 => 
            array (
                'id' => 415,
                'qid' => 'Q2087685',
                'name' => 'Philippe Nemo',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            415 => 
            array (
                'id' => 416,
                'qid' => 'Q6957555',
                'name' => 'Nader El-Bizri',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            416 => 
            array (
                'id' => 417,
                'qid' => 'Q7183978',
                'name' => 'Philip Lindholm',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            417 => 
            array (
                'id' => 418,
                'qid' => 'Q7518850',
                'name' => 'Simon Glendinning',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:38',
                'updated_at' => '2018-08-08 04:28:38',
            ),
            418 => 
            array (
                'id' => 419,
                'qid' => 'Q18692704',
                'name' => 'Bérénice Levet',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:39',
                'updated_at' => '2018-08-08 04:28:39',
            ),
            419 => 
            array (
                'id' => 420,
                'qid' => 'Q3852788',
                'name' => 'Mauro Carbone',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:42',
                'updated_at' => '2018-08-08 04:28:42',
            ),
            420 => 
            array (
                'id' => 421,
                'qid' => 'Q270705',
                'name' => 'Adrienne Rich',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:43',
                'updated_at' => '2018-08-08 04:28:43',
            ),
            421 => 
            array (
                'id' => 422,
                'qid' => 'Q543381',
                'name' => 'Iris Marion Young',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:43',
                'updated_at' => '2018-08-08 04:28:43',
            ),
            422 => 
            array (
                'id' => 423,
                'qid' => 'Q3527967',
                'name' => 'Ti-Grace Atkinson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:43',
                'updated_at' => '2018-08-08 04:28:43',
            ),
            423 => 
            array (
                'id' => 424,
                'qid' => 'Q5591230',
                'name' => 'Grace Ji-Sun Kim',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:43',
                'updated_at' => '2018-08-08 04:28:43',
            ),
            424 => 
            array (
                'id' => 425,
                'qid' => 'Q53001',
                'name' => 'Jean-Luc Godard',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:45',
                'updated_at' => '2018-08-08 04:28:45',
            ),
            425 => 
            array (
                'id' => 426,
                'qid' => 'Q2421756',
                'name' => 'Patrick Moya',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:48',
                'updated_at' => '2018-08-08 04:28:48',
            ),
            426 => 
            array (
                'id' => 427,
                'qid' => 'Q310798',
                'name' => 'Stephen Wolfram',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:49',
                'updated_at' => '2018-08-08 04:28:49',
            ),
            427 => 
            array (
                'id' => 428,
                'qid' => 'Q76409',
                'name' => 'Charles Bukowski',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            428 => 
            array (
                'id' => 429,
                'qid' => 'Q187019',
                'name' => 'Philip Roth',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            429 => 
            array (
                'id' => 430,
                'qid' => 'Q245257',
                'name' => 'William Styron',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            430 => 
            array (
                'id' => 431,
                'qid' => 'Q316607',
                'name' => 'Jonathan Franzen',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            431 => 
            array (
                'id' => 432,
                'qid' => 'Q343554',
                'name' => 'Jason Starr',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            432 => 
            array (
                'id' => 433,
                'qid' => 'Q445511',
                'name' => 'Michael Walzer',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            433 => 
            array (
                'id' => 434,
                'qid' => 'Q458336',
                'name' => 'Barry Hannah',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            434 => 
            array (
                'id' => 435,
                'qid' => 'Q556244',
                'name' => 'Fuminori Nakamura',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            435 => 
            array (
                'id' => 436,
                'qid' => 'Q737191',
                'name' => 'Sebhat Gebre-Egziabher',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            436 => 
            array (
                'id' => 437,
                'qid' => 'Q2979432',
                'name' => 'Clive James',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            437 => 
            array (
                'id' => 438,
                'qid' => 'Q3050522',
                'name' => 'Eleanor Catton',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            438 => 
            array (
                'id' => 439,
                'qid' => 'Q3243146',
                'name' => 'Mohsin Hamid',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            439 => 
            array (
                'id' => 440,
                'qid' => 'Q4707411',
                'name' => 'Alan N. Shapiro',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            440 => 
            array (
                'id' => 441,
                'qid' => 'Q4724974',
                'name' => 'Ali Liebegott',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            441 => 
            array (
                'id' => 442,
                'qid' => 'Q4770956',
                'name' => 'Antanas Škėma',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            442 => 
            array (
                'id' => 443,
                'qid' => 'Q4803220',
                'name' => 'Asad Shabbir',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            443 => 
            array (
                'id' => 444,
                'qid' => 'Q6997778',
                'name' => 'Nestan Kvinikadze',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:51',
                'updated_at' => '2018-08-08 04:28:51',
            ),
            444 => 
            array (
                'id' => 445,
                'qid' => 'Q3438616',
                'name' => 'Roger-Michel Allemand',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:53',
                'updated_at' => '2018-08-08 04:28:53',
            ),
            445 => 
            array (
                'id' => 446,
                'qid' => 'Q319803',
                'name' => 'Ronald Dworkin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:28:59',
                'updated_at' => '2018-08-08 04:28:59',
            ),
            446 => 
            array (
                'id' => 447,
                'qid' => 'Q325741',
                'name' => 'Homi K. Bhabha',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:02',
                'updated_at' => '2018-08-08 04:29:02',
            ),
            447 => 
            array (
                'id' => 448,
                'qid' => 'Q340234',
                'name' => 'Achille Mbembe',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:02',
                'updated_at' => '2018-08-08 04:29:02',
            ),
            448 => 
            array (
                'id' => 449,
                'qid' => 'Q7340489',
                'name' => 'Rob Redding',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:02',
                'updated_at' => '2018-08-08 04:29:02',
            ),
            449 => 
            array (
                'id' => 450,
                'qid' => 'Q44845',
                'name' => 'Peter Sloterdijk',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            450 => 
            array (
                'id' => 451,
                'qid' => 'Q352465',
                'name' => 'Félix Guattari',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            451 => 
            array (
                'id' => 452,
                'qid' => 'Q448427',
                'name' => 'Sarah Kofman',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            452 => 
            array (
                'id' => 453,
                'qid' => 'Q556699',
                'name' => 'Manuel De Landa',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            453 => 
            array (
                'id' => 454,
                'qid' => 'Q644620',
                'name' => 'Quentin Meillassoux',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            454 => 
            array (
                'id' => 455,
                'qid' => 'Q747790',
                'name' => 'Paolo Virno',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            455 => 
            array (
                'id' => 456,
                'qid' => 'Q852886',
                'name' => 'François Laruelle',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            456 => 
            array (
                'id' => 457,
                'qid' => 'Q912704',
                'name' => 'Brian Massumi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            457 => 
            array (
                'id' => 458,
                'qid' => 'Q918655',
                'name' => 'Michael Hardt',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            458 => 
            array (
                'id' => 459,
                'qid' => 'Q951460',
                'name' => 'François Zourabichvili',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            459 => 
            array (
                'id' => 460,
                'qid' => 'Q2864351',
                'name' => 'Ars industrialis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            460 => 
            array (
                'id' => 461,
                'qid' => 'Q3763746',
                'name' => 'Éric Alliez',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            461 => 
            array (
                'id' => 462,
                'qid' => 'Q4147967',
                'name' => 'Iain Hamilton Grant',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            462 => 
            array (
                'id' => 463,
                'qid' => 'Q4719897',
                'name' => 'Alexander R. Galloway',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            463 => 
            array (
                'id' => 464,
                'qid' => 'Q5301680',
                'name' => 'Douglas Kellner',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            464 => 
            array (
                'id' => 465,
                'qid' => 'Q5495081',
                'name' => 'Fred Evans',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            465 => 
            array (
                'id' => 466,
                'qid' => 'Q6004524',
                'name' => 'Reza Negarestani',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            466 => 
            array (
                'id' => 467,
                'qid' => 'Q6535374',
                'name' => 'Levi Bryant',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            467 => 
            array (
                'id' => 468,
                'qid' => 'Q7027450',
                'name' => 'Nick Land',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            468 => 
            array (
                'id' => 469,
                'qid' => 'Q7153067',
                'name' => 'Paul R. Patton',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            469 => 
            array (
                'id' => 470,
                'qid' => 'Q7297230',
                'name' => 'Ray Brassier',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:03',
                'updated_at' => '2018-08-08 04:29:03',
            ),
            470 => 
            array (
                'id' => 471,
                'qid' => 'Q219368',
                'name' => 'Judith Butler',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            471 => 
            array (
                'id' => 472,
                'qid' => 'Q267536',
                'name' => 'Nancy Fraser',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            472 => 
            array (
                'id' => 473,
                'qid' => 'Q292326',
                'name' => 'Teresa de Lauretis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-08 04:29:04',
            ),
            473 => 
            array (
                'id' => 474,
                'qid' => 'Q311687',
                'name' => 'Giorgio Agamben',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            474 => 
            array (
                'id' => 475,
                'qid' => 'Q444593',
                'name' => 'Gayle Rubin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-08 04:29:04',
            ),
            475 => 
            array (
                'id' => 476,
                'qid' => 'Q1265639',
                'name' => 'Roberto Esposito',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-08 04:29:04',
            ),
            476 => 
            array (
                'id' => 477,
                'qid' => 'Q1482545',
                'name' => 'Jürgen Mümken',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-08 04:29:04',
            ),
            477 => 
            array (
                'id' => 478,
                'qid' => 'Q1748370',
                'name' => 'Yves Charles Zarka',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-08 04:29:04',
            ),
            478 => 
            array (
                'id' => 479,
                'qid' => 'Q4801729',
                'name' => 'Arturo Escobar',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:04',
                'updated_at' => '2018-08-08 04:29:04',
            ),
            479 => 
            array (
                'id' => 480,
                'qid' => 'Q637580',
                'name' => 'Todd May',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:08',
                'updated_at' => '2018-08-08 04:29:08',
            ),
            480 => 
            array (
                'id' => 481,
                'qid' => 'Q263235',
                'name' => 'Seyla Benhabib',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:12',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            481 => 
            array (
                'id' => 482,
                'qid' => 'Q22957880',
                'name' => 'Cristina Lafont',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:12',
                'updated_at' => '2018-08-08 04:29:12',
            ),
            482 => 
            array (
                'id' => 483,
                'qid' => 'Q2829507',
                'name' => 'Alain Accardo',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:16',
                'updated_at' => '2018-08-08 04:29:16',
            ),
            483 => 
            array (
                'id' => 484,
                'qid' => 'Q353754',
                'name' => 'Paul de Man',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:17',
                'updated_at' => '2018-08-08 04:29:17',
            ),
            484 => 
            array (
                'id' => 485,
                'qid' => 'Q3848721',
                'name' => 'Maurizio Ferraris',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:17',
                'updated_at' => '2018-08-08 04:29:17',
            ),
            485 => 
            array (
                'id' => 486,
                'qid' => 'Q712469',
                'name' => 'Cornel West',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:19',
                'updated_at' => '2018-08-09 01:07:10',
            ),
            486 => 
            array (
                'id' => 487,
                'qid' => 'Q6233842',
                'name' => 'John Frame',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:22',
                'updated_at' => '2018-08-08 04:29:22',
            ),
            487 => 
            array (
                'id' => 488,
                'qid' => 'Q467470',
                'name' => 'Jacques Rancière',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:26',
                'updated_at' => '2018-08-08 04:29:26',
            ),
            488 => 
            array (
                'id' => 489,
                'qid' => 'Q547086',
                'name' => 'Tristan Garcia',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:26',
                'updated_at' => '2018-08-08 04:29:26',
            ),
            489 => 
            array (
                'id' => 490,
                'qid' => 'Q5515822',
                'name' => 'Gabriel Rockhill',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:26',
                'updated_at' => '2018-08-08 04:29:26',
            ),
            490 => 
            array (
                'id' => 491,
                'qid' => 'Q5600327',
                'name' => 'great ape personhood',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:36',
                'updated_at' => '2018-08-08 04:29:36',
            ),
            491 => 
            array (
                'id' => 492,
                'qid' => 'Q13489381',
                'name' => 'effective altruism',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:36',
                'updated_at' => '2018-08-08 04:29:36',
            ),
            492 => 
            array (
                'id' => 493,
                'qid' => 'Q38481872',
                'name' => 'Yves Bonnardel',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:36',
                'updated_at' => '2018-08-08 04:29:36',
            ),
            493 => 
            array (
                'id' => 494,
                'qid' => 'Q5982547',
                'name' => 'Ian Parker',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:38',
                'updated_at' => '2018-08-08 04:29:38',
            ),
            494 => 
            array (
                'id' => 495,
                'qid' => 'Q6118610',
                'name' => 'Renata Salecl',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:38',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            495 => 
            array (
                'id' => 496,
                'qid' => 'Q13575',
                'name' => 'François Quesnay',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:44',
                'updated_at' => '2018-08-08 04:29:44',
            ),
            496 => 
            array (
                'id' => 497,
                'qid' => 'Q18109767',
                'name' => 'Cheng Duanli',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:29:44',
                'updated_at' => '2018-08-08 04:29:44',
            ),
            497 => 
            array (
                'id' => 498,
                'qid' => 'Q8589',
                'name' => 'Ashoka',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:30:53',
                'updated_at' => '2018-08-08 04:30:53',
            ),
            498 => 
            array (
                'id' => 499,
                'qid' => 'Q57376',
                'name' => 'Jigme Khesar Namgyel Wangchuck',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:30:53',
                'updated_at' => '2018-08-08 04:30:53',
            ),
            499 => 
            array (
                'id' => 500,
                'qid' => 'Q379577',
                'name' => 'Marpa Lotsawa',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:30:53',
                'updated_at' => '2018-08-08 04:30:53',
            ),
        ));
        \DB::table('influences')->insert(array (
            0 => 
            array (
                'id' => 501,
                'qid' => 'Q8873',
                'name' => 'Satyajit Ray',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:46',
                'updated_at' => '2018-08-08 04:31:46',
            ),
            1 => 
            array (
                'id' => 502,
                'qid' => 'Q16369838',
                'name' => 'Tamaz Chkhenkeli',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:46',
                'updated_at' => '2018-08-08 04:31:46',
            ),
            2 => 
            array (
                'id' => 503,
                'qid' => 'Q2775811',
                'name' => 'Tribhuvandas Luhar',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:48',
                'updated_at' => '2018-08-08 04:31:48',
            ),
            3 => 
            array (
                'id' => 504,
                'qid' => 'Q381296',
                'name' => 'Faiz Ahmad Faiz',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:49',
                'updated_at' => '2018-08-08 04:31:49',
            ),
            4 => 
            array (
                'id' => 505,
                'qid' => 'Q732388',
                'name' => 'Muhammad Tahir-ul-Qadri',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:49',
                'updated_at' => '2018-08-08 04:31:49',
            ),
            5 => 
            array (
                'id' => 506,
                'qid' => 'Q3348646',
                'name' => 'Abul Hasan Ali Hasani Nadwi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:49',
                'updated_at' => '2018-08-08 04:31:49',
            ),
            6 => 
            array (
                'id' => 507,
                'qid' => 'Q15689042',
                'name' => 'Ganapati Muni',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:50',
                'updated_at' => '2018-08-08 04:31:50',
            ),
            7 => 
            array (
                'id' => 508,
                'qid' => 'Q312553',
                'name' => 'Nathuram Godse',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-08 04:31:52',
                'updated_at' => '2018-08-08 04:31:52',
            ),
            8 => 
            array (
                'id' => 509,
                'qid' => 'Q80612',
                'name' => 'Anaximenes of Miletus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:15',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            9 => 
            array (
                'id' => 510,
                'qid' => 'Q312682',
                'name' => 'Euclid of Megara',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:22',
                'updated_at' => '2018-08-10 01:31:22',
            ),
            10 => 
            array (
                'id' => 511,
                'qid' => 'Q539514',
                'name' => 'Metrodorus of Lampsacus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:23',
                'updated_at' => '2018-08-10 01:31:23',
            ),
            11 => 
            array (
                'id' => 512,
                'qid' => 'Q179785',
                'name' => 'Gorgias',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:24',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            12 => 
            array (
                'id' => 513,
                'qid' => 'Q535769',
                'name' => 'Metrodorus of Chios',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:27',
                'updated_at' => '2018-08-10 01:31:27',
            ),
            13 => 
            array (
                'id' => 514,
                'qid' => 'Q5264',
                'name' => 'Hippocrates',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:30',
                'updated_at' => '2018-08-10 01:31:30',
            ),
            14 => 
            array (
                'id' => 515,
                'qid' => 'Q221182',
                'name' => 'Isocrates',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:30',
                'updated_at' => '2018-08-10 01:31:30',
            ),
            15 => 
            array (
                'id' => 516,
                'qid' => 'Q372798',
                'name' => 'Polus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:30',
                'updated_at' => '2018-08-10 01:31:30',
            ),
            16 => 
            array (
                'id' => 517,
                'qid' => 'Q129772',
                'name' => 'Xenophon',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            17 => 
            array (
                'id' => 518,
                'qid' => 'Q187982',
                'name' => 'Alcibiades',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            18 => 
            array (
                'id' => 519,
                'qid' => 'Q380190',
                'name' => 'Phaedo of Elis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            19 => 
            array (
                'id' => 520,
                'qid' => 'Q409647',
                'name' => 'Aeschines of Sphettus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            20 => 
            array (
                'id' => 521,
                'qid' => 'Q744125',
                'name' => 'Chaerephon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            21 => 
            array (
                'id' => 522,
                'qid' => 'Q928470',
                'name' => 'Simmias of Thebes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            22 => 
            array (
                'id' => 523,
                'qid' => 'Q965144',
                'name' => 'Cebes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            23 => 
            array (
                'id' => 524,
                'qid' => 'Q1920435',
                'name' => 'Ménexène',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            24 => 
            array (
                'id' => 525,
                'qid' => 'Q11906234',
                'name' => 'Apollodorus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:31',
                'updated_at' => '2018-08-10 01:31:31',
            ),
            25 => 
            array (
                'id' => 526,
                'qid' => 'Q139083',
                'name' => 'Theramenes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:34',
                'updated_at' => '2018-08-10 01:31:34',
            ),
            26 => 
            array (
                'id' => 527,
                'qid' => 'Q41980',
                'name' => 'Democritus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:35',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            27 => 
            array (
                'id' => 528,
                'qid' => 'Q12901192',
                'name' => 'Nessas of Chios',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:37',
                'updated_at' => '2018-08-10 01:31:37',
            ),
            28 => 
            array (
                'id' => 529,
                'qid' => 'Q59180',
                'name' => 'Diogenes of Sinope',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:40',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            29 => 
            array (
                'id' => 530,
                'qid' => 'Q45013',
                'name' => 'Axiothea of Phlius',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            30 => 
            array (
                'id' => 531,
                'qid' => 'Q185150',
                'name' => 'Eudoxus of Cnidus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            31 => 
            array (
                'id' => 532,
                'qid' => 'Q214121',
                'name' => 'Xenocrates',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            32 => 
            array (
                'id' => 533,
                'qid' => 'Q288467',
                'name' => 'Lastheneia of Mantinea',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            33 => 
            array (
                'id' => 534,
                'qid' => 'Q316334',
                'name' => 'Heraclides Ponticus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            34 => 
            array (
                'id' => 535,
                'qid' => 'Q325955',
                'name' => 'Speusippus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            35 => 
            array (
                'id' => 536,
                'qid' => 'Q428222',
                'name' => 'Chaeron of Pellene',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            36 => 
            array (
                'id' => 537,
                'qid' => 'Q555818',
                'name' => 'Philip of Opus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            37 => 
            array (
                'id' => 538,
                'qid' => 'Q2362087',
                'name' => 'Theodectes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            38 => 
            array (
                'id' => 539,
                'qid' => 'Q3060421',
                'name' => 'Euphraeus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            39 => 
            array (
                'id' => 540,
                'qid' => 'Q3134747',
                'name' => 'Hestiaeus of Perinthus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            40 => 
            array (
                'id' => 541,
                'qid' => 'Q3271431',
                'name' => 'Leon of Byzantium',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            41 => 
            array (
                'id' => 542,
                'qid' => 'Q5170720',
                'name' => 'Coriscus of Scepsis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            42 => 
            array (
                'id' => 543,
                'qid' => 'Q5255306',
                'name' => 'Demetrius of Amphipolis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            43 => 
            array (
                'id' => 544,
                'qid' => 'Q5385022',
                'name' => 'Erastus of Scepsis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            44 => 
            array (
                'id' => 545,
                'qid' => 'Q5732535',
                'name' => 'Heraclides of Aenus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            45 => 
            array (
                'id' => 546,
                'qid' => 'Q7263937',
                'name' => 'Python of Aenus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            46 => 
            array (
                'id' => 547,
                'qid' => 'Q7806914',
                'name' => 'Timolaus of Cyzicus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            47 => 
            array (
                'id' => 548,
                'qid' => 'Q16210063',
                'name' => 'Euaeon of Lampsacus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:45',
                'updated_at' => '2018-08-10 01:31:45',
            ),
            48 => 
            array (
                'id' => 549,
                'qid' => 'Q451566',
                'name' => 'Menaechmus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:48',
                'updated_at' => '2018-08-10 01:31:48',
            ),
            49 => 
            array (
                'id' => 550,
                'qid' => 'Q471218',
                'name' => 'Callippus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:48',
                'updated_at' => '2018-08-10 01:31:48',
            ),
            50 => 
            array (
                'id' => 551,
                'qid' => 'Q976854',
                'name' => 'Dinostratus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:48',
                'updated_at' => '2018-08-10 01:31:48',
            ),
            51 => 
            array (
                'id' => 552,
                'qid' => 'Q5114613',
                'name' => 'Chrysippus of Cnidos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:48',
                'updated_at' => '2018-08-10 01:31:48',
            ),
            52 => 
            array (
                'id' => 553,
                'qid' => 'Q317947',
                'name' => 'Crates of Thebes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:49',
                'updated_at' => '2018-08-10 01:31:49',
            ),
            53 => 
            array (
                'id' => 554,
                'qid' => 'Q434773',
                'name' => 'Crantor',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:50',
                'updated_at' => '2018-08-10 01:31:50',
            ),
            54 => 
            array (
                'id' => 555,
                'qid' => 'Q553856',
                'name' => 'Polemon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:50',
                'updated_at' => '2018-08-10 01:31:50',
            ),
            55 => 
            array (
                'id' => 556,
                'qid' => 'Q160362',
                'name' => 'Theophrastus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            56 => 
            array (
                'id' => 557,
                'qid' => 'Q335156',
                'name' => 'Aristoxenus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-10 01:31:51',
            ),
            57 => 
            array (
                'id' => 558,
                'qid' => 'Q352621',
                'name' => 'Dicaearchus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-10 01:31:51',
            ),
            58 => 
            array (
                'id' => 559,
                'qid' => 'Q358482',
                'name' => 'Eudemus of Rhodes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-10 01:31:51',
            ),
            59 => 
            array (
                'id' => 560,
                'qid' => 'Q736433',
                'name' => 'Clearchus of Soli',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-10 01:31:51',
            ),
            60 => 
            array (
                'id' => 561,
                'qid' => 'Q943529',
                'name' => 'Phaenias of Eresus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-10 01:31:51',
            ),
            61 => 
            array (
                'id' => 562,
                'qid' => 'Q2955937',
                'name' => 'Chamaeleon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-10 01:31:51',
            ),
            62 => 
            array (
                'id' => 563,
                'qid' => 'Q3347025',
                'name' => 'Neleus of Scepsis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:51',
                'updated_at' => '2018-08-10 01:31:51',
            ),
            63 => 
            array (
                'id' => 564,
                'qid' => 'Q316353',
                'name' => 'Strato of Lampsacus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:52',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            64 => 
            array (
                'id' => 565,
                'qid' => 'Q359231',
                'name' => 'Bion of Borysthenes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:52',
                'updated_at' => '2018-08-10 01:31:52',
            ),
            65 => 
            array (
                'id' => 566,
                'qid' => 'Q280872',
                'name' => 'Timon of Phlius',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:53',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            66 => 
            array (
                'id' => 567,
                'qid' => 'Q140188',
                'name' => 'Aristarchus of Samos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:55',
                'updated_at' => '2018-08-10 01:31:55',
            ),
            67 => 
            array (
                'id' => 568,
                'qid' => 'Q542808',
                'name' => 'Hermarchus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            68 => 
            array (
                'id' => 569,
                'qid' => 'Q740432',
                'name' => 'Polyaenus of Lampsacus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            69 => 
            array (
                'id' => 570,
                'qid' => 'Q1225067',
                'name' => 'Leonteus of Lampsacus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            70 => 
            array (
                'id' => 571,
                'qid' => 'Q1229024',
                'name' => 'Themista of Lampsacus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            71 => 
            array (
                'id' => 572,
                'qid' => 'Q1234536',
                'name' => 'Colotes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            72 => 
            array (
                'id' => 573,
                'qid' => 'Q1990039',
                'name' => 'Nicanor',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            73 => 
            array (
                'id' => 574,
                'qid' => 'Q2414934',
                'name' => 'Leontion',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            74 => 
            array (
                'id' => 575,
                'qid' => 'Q18642911',
                'name' => 'Mys',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            75 => 
            array (
                'id' => 576,
                'qid' => 'Q18642924',
                'name' => 'Menoeceus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            76 => 
            array (
                'id' => 577,
                'qid' => 'Q18642925',
                'name' => 'Pythocles',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            77 => 
            array (
                'id' => 578,
                'qid' => 'Q18643198',
                'name' => 'Ctesippus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            78 => 
            array (
                'id' => 579,
                'qid' => 'Q18643205',
                'name' => 'Apelles',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            79 => 
            array (
                'id' => 580,
                'qid' => 'Q18643212',
                'name' => 'Mammarion',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            80 => 
            array (
                'id' => 581,
                'qid' => 'Q18643214',
                'name' => 'Hedeia',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            81 => 
            array (
                'id' => 582,
                'qid' => 'Q18643216',
                'name' => 'Erotion',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            82 => 
            array (
                'id' => 583,
                'qid' => 'Q18643217',
                'name' => 'Nicidion',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            83 => 
            array (
                'id' => 584,
                'qid' => 'Q18643222',
                'name' => 'Boison',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            84 => 
            array (
                'id' => 585,
                'qid' => 'Q18643224',
                'name' => 'Demetria',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            85 => 
            array (
                'id' => 586,
                'qid' => 'Q18643226',
                'name' => 'Athenaios',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            86 => 
            array (
                'id' => 587,
                'qid' => 'Q18643228',
                'name' => 'Mentorides',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:56',
                'updated_at' => '2018-08-10 01:31:56',
            ),
            87 => 
            array (
                'id' => 588,
                'qid' => 'Q43182',
                'name' => 'Eratosthenes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:57',
                'updated_at' => '2018-08-10 01:31:57',
            ),
            88 => 
            array (
                'id' => 589,
                'qid' => 'Q310149',
                'name' => 'Cleanthes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:57',
                'updated_at' => '2018-08-10 01:31:57',
            ),
            89 => 
            array (
                'id' => 590,
                'qid' => 'Q646951',
                'name' => 'Aristo of Chios',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:57',
                'updated_at' => '2018-08-10 01:31:57',
            ),
            90 => 
            array (
                'id' => 591,
                'qid' => 'Q662932',
                'name' => 'Persaeus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:57',
                'updated_at' => '2018-08-10 01:31:57',
            ),
            91 => 
            array (
                'id' => 592,
                'qid' => 'Q969976',
                'name' => 'Dionysius the Renegade',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:57',
                'updated_at' => '2018-08-10 01:31:57',
            ),
            92 => 
            array (
                'id' => 593,
                'qid' => 'Q2311453',
                'name' => 'Sphaerus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:57',
                'updated_at' => '2018-08-10 01:31:57',
            ),
            93 => 
            array (
                'id' => 594,
                'qid' => 'Q180671',
                'name' => 'Aratus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:59',
                'updated_at' => '2018-08-10 01:31:59',
            ),
            94 => 
            array (
                'id' => 595,
                'qid' => 'Q11921190',
                'name' => 'Euphranor of Seleucia',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:59',
                'updated_at' => '2018-08-10 01:31:59',
            ),
            95 => 
            array (
                'id' => 596,
                'qid' => 'Q18607032',
                'name' => 'Dioscurides of Cyprus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:59',
                'updated_at' => '2018-08-10 01:31:59',
            ),
            96 => 
            array (
                'id' => 597,
                'qid' => 'Q18607049',
                'name' => 'Nicolochus of Rhodes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:59',
                'updated_at' => '2018-08-10 01:31:59',
            ),
            97 => 
            array (
                'id' => 598,
                'qid' => 'Q18607109',
                'name' => 'Praylus of the Troad',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:31:59',
                'updated_at' => '2018-08-10 01:31:59',
            ),
            98 => 
            array (
                'id' => 599,
                'qid' => 'Q189767',
                'name' => 'Zeno of Tarsus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:00',
                'updated_at' => '2018-08-10 01:32:00',
            ),
            99 => 
            array (
                'id' => 600,
                'qid' => 'Q434203',
                'name' => 'Diogenes of Babylon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:00',
                'updated_at' => '2018-08-10 01:32:00',
            ),
            100 => 
            array (
                'id' => 601,
                'qid' => 'Q17002244',
                'name' => 'Dioscorides',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:00',
                'updated_at' => '2018-08-10 01:32:00',
            ),
            101 => 
            array (
                'id' => 602,
                'qid' => 'Q203911',
                'name' => 'Metrodorus of Stratonicea',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:01',
                'updated_at' => '2018-08-10 01:32:01',
            ),
            102 => 
            array (
                'id' => 603,
                'qid' => 'Q466951',
                'name' => 'Clitomachus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:01',
                'updated_at' => '2018-08-10 01:32:01',
            ),
            103 => 
            array (
                'id' => 604,
                'qid' => 'Q5638786',
                'name' => 'Hagnon of Tarsus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:01',
                'updated_at' => '2018-08-10 01:32:01',
            ),
            104 => 
            array (
                'id' => 605,
                'qid' => 'Q435163',
                'name' => 'Servius Sulpicius Rufus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:03',
                'updated_at' => '2018-08-10 01:32:03',
            ),
            105 => 
            array (
                'id' => 606,
                'qid' => 'Q587621',
                'name' => 'Trebatius Testa',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:03',
                'updated_at' => '2018-08-10 01:32:03',
            ),
            106 => 
            array (
                'id' => 607,
                'qid' => 'Q31845',
                'name' => 'Arrian',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:06',
                'updated_at' => '2018-08-10 01:32:06',
            ),
            107 => 
            array (
                'id' => 608,
                'qid' => 'Q949530',
                'name' => 'Demonax',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:06',
                'updated_at' => '2018-08-10 01:32:06',
            ),
            108 => 
            array (
                'id' => 609,
                'qid' => 'Q18607653',
                'name' => 'Saturninus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:09',
                'updated_at' => '2018-08-10 01:32:09',
            ),
            109 => 
            array (
                'id' => 610,
                'qid' => 'Q203445',
                'name' => 'Porphyry',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:10',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            110 => 
            array (
                'id' => 611,
                'qid' => 'Q436634',
                'name' => 'Cassius Longinus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:10',
                'updated_at' => '2018-08-10 01:32:10',
            ),
            111 => 
            array (
                'id' => 612,
                'qid' => 'Q310916',
                'name' => 'Iamblichus',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:11',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            112 => 
            array (
                'id' => 613,
                'qid' => 'Q248969',
                'name' => 'Sopater of Apamea',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:12',
                'updated_at' => '2018-08-10 01:32:12',
            ),
            113 => 
            array (
                'id' => 614,
                'qid' => 'Q369129',
                'name' => 'Dexippus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:12',
                'updated_at' => '2018-08-10 01:32:12',
            ),
            114 => 
            array (
                'id' => 615,
                'qid' => 'Q404023',
                'name' => 'Aedesius',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:12',
                'updated_at' => '2018-08-10 01:32:12',
            ),
            115 => 
            array (
                'id' => 616,
                'qid' => 'Q441590',
                'name' => 'Eustathius of Cappadocia',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:12',
                'updated_at' => '2018-08-10 01:32:12',
            ),
            116 => 
            array (
                'id' => 617,
                'qid' => 'Q18602265',
                'name' => 'Hierius',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:12',
                'updated_at' => '2018-08-10 01:32:12',
            ),
            117 => 
            array (
                'id' => 618,
                'qid' => 'Q189711',
                'name' => 'Zenodotus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:14',
                'updated_at' => '2018-08-10 01:32:14',
            ),
            118 => 
            array (
                'id' => 619,
                'qid' => 'Q581833',
                'name' => 'Marinus of Neapolis',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:14',
                'updated_at' => '2018-08-10 01:32:14',
            ),
            119 => 
            array (
                'id' => 620,
                'qid' => 'Q660170',
                'name' => 'Isidore of Alexandria',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:14',
                'updated_at' => '2018-08-10 01:32:14',
            ),
            120 => 
            array (
                'id' => 621,
                'qid' => 'Q11373',
                'name' => 'Abu Ma\'shar al-Balkhi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:18',
                'updated_at' => '2018-08-10 01:32:18',
            ),
            121 => 
            array (
                'id' => 622,
                'qid' => 'Q335516',
                'name' => 'Abu Zayd al-Balkhi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:18',
                'updated_at' => '2018-08-10 01:32:18',
            ),
            122 => 
            array (
                'id' => 623,
                'qid' => 'Q569607',
                'name' => 'Anselm of Laon',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:25',
                'updated_at' => '2018-08-10 01:32:25',
            ),
            123 => 
            array (
                'id' => 624,
                'qid' => 'Q402807',
                'name' => 'Baha ud-Din Walad',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:27',
                'updated_at' => '2018-08-10 01:32:27',
            ),
            124 => 
            array (
                'id' => 625,
                'qid' => 'Q918471',
                'name' => 'Abu Bakr ibn al-Arabi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:27',
                'updated_at' => '2018-08-10 01:32:27',
            ),
            125 => 
            array (
                'id' => 626,
                'qid' => 'Q264028',
                'name' => 'John of Salisbury',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:28',
                'updated_at' => '2018-08-10 01:32:28',
            ),
            126 => 
            array (
                'id' => 627,
                'qid' => 'Q381951',
                'name' => 'Hilarius',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:28',
                'updated_at' => '2018-08-10 01:32:28',
            ),
            127 => 
            array (
                'id' => 628,
                'qid' => 'Q3436698',
                'name' => 'Robert of Melun',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:28',
                'updated_at' => '2018-08-10 01:32:28',
            ),
            128 => 
            array (
                'id' => 629,
                'qid' => 'Q311822',
                'name' => 'William of Tyre',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:30',
                'updated_at' => '2018-08-10 01:32:30',
            ),
            129 => 
            array (
                'id' => 630,
                'qid' => 'Q321390',
                'name' => 'Adam of Balsham',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:30',
                'updated_at' => '2018-08-10 01:32:30',
            ),
            130 => 
            array (
                'id' => 631,
                'qid' => 'Q262701',
                'name' => 'Bernard of Quintavalle',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:34',
                'updated_at' => '2018-08-10 01:32:34',
            ),
            131 => 
            array (
                'id' => 632,
                'qid' => 'Q315149',
                'name' => 'Giovanni da Pian del Carpine',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:34',
                'updated_at' => '2018-08-10 01:32:34',
            ),
            132 => 
            array (
                'id' => 633,
                'qid' => 'Q329670',
                'name' => 'Pietro Catanii',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:34',
                'updated_at' => '2018-08-10 01:32:34',
            ),
            133 => 
            array (
                'id' => 634,
                'qid' => 'Q171677',
                'name' => 'Roger Bacon',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:36',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            134 => 
            array (
                'id' => 635,
                'qid' => 'Q676267',
                'name' => 'Henry Bate of Malines',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:39',
                'updated_at' => '2018-08-10 01:32:39',
            ),
            135 => 
            array (
                'id' => 636,
                'qid' => 'Q1636083',
                'name' => 'Remigio dei Girolami',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:39',
                'updated_at' => '2018-08-10 01:32:39',
            ),
            136 => 
            array (
                'id' => 637,
                'qid' => 'Q1322939',
                'name' => 'John Peckham',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:40',
                'updated_at' => '2018-08-10 01:32:40',
            ),
            137 => 
            array (
                'id' => 638,
                'qid' => 'Q23957762',
                'name' => 'Thomas Le Myesier',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:43',
                'updated_at' => '2018-08-10 01:32:43',
            ),
            138 => 
            array (
                'id' => 639,
                'qid' => 'Q4680059',
                'name' => 'Adam de Wodeham',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:47',
                'updated_at' => '2018-08-10 01:32:47',
            ),
            139 => 
            array (
                'id' => 640,
                'qid' => 'Q61044',
                'name' => 'Albert of Saxony',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:49',
                'updated_at' => '2018-08-10 01:32:49',
            ),
            140 => 
            array (
                'id' => 641,
                'qid' => 'Q26648',
                'name' => 'John Argyropoulos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:54',
                'updated_at' => '2018-08-10 01:32:54',
            ),
            141 => 
            array (
                'id' => 642,
                'qid' => 'Q48544',
                'name' => 'Cosimo de\' Medici',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:54',
                'updated_at' => '2018-08-10 01:32:54',
            ),
            142 => 
            array (
                'id' => 643,
                'qid' => 'Q192374',
                'name' => 'Marsilio Ficino',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:54',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            143 => 
            array (
                'id' => 644,
                'qid' => 'Q299446',
                'name' => 'Basilios Bessarion',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:54',
                'updated_at' => '2018-08-10 01:32:54',
            ),
            144 => 
            array (
                'id' => 645,
                'qid' => 'Q381211',
                'name' => 'Gennadius Scholarius',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:54',
                'updated_at' => '2018-08-10 01:32:54',
            ),
            145 => 
            array (
                'id' => 646,
                'qid' => 'Q738727',
                'name' => 'Mark of Ephesus',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:54',
                'updated_at' => '2018-08-10 01:32:54',
            ),
            146 => 
            array (
                'id' => 647,
                'qid' => 'Q177854',
                'name' => 'Lorenzo de\' Medici',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:57',
                'updated_at' => '2018-08-10 01:32:57',
            ),
            147 => 
            array (
                'id' => 648,
                'qid' => 'Q250414',
                'name' => 'Poliziano',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:32:57',
                'updated_at' => '2018-08-10 01:32:57',
            ),
            148 => 
            array (
                'id' => 649,
                'qid' => 'Q2853947',
                'name' => 'Antoine Fouquelin',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:04',
                'updated_at' => '2018-08-10 01:33:04',
            ),
            149 => 
            array (
                'id' => 650,
                'qid' => 'Q3340954',
                'name' => 'Nicolas de Nancel',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:04',
                'updated_at' => '2018-08-10 01:33:04',
            ),
            150 => 
            array (
                'id' => 651,
                'qid' => 'Q27150922',
                'name' => 'Pierre Martini',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:04',
                'updated_at' => '2018-08-10 01:33:04',
            ),
            151 => 
            array (
                'id' => 652,
                'qid' => 'Q318037',
                'name' => 'Vincenzo Viviani',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:13',
                'updated_at' => '2018-08-10 01:33:13',
            ),
            152 => 
            array (
                'id' => 653,
                'qid' => 'Q1796926',
                'name' => 'Mario Guiducci',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:13',
                'updated_at' => '2018-08-10 01:33:13',
            ),
            153 => 
            array (
                'id' => 654,
                'qid' => 'Q122392',
                'name' => 'Jacob Bernoulli',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:48',
                'updated_at' => '2018-08-10 01:33:48',
            ),
            154 => 
            array (
                'id' => 655,
                'qid' => 'Q227897',
                'name' => 'Johann Bernoulli',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:48',
                'updated_at' => '2018-08-10 01:33:48',
            ),
            155 => 
            array (
                'id' => 656,
                'qid' => 'Q62565',
                'name' => 'Ewald Friedrich von Hertzberg',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:57',
                'updated_at' => '2018-08-10 01:33:57',
            ),
            156 => 
            array (
                'id' => 657,
                'qid' => 'Q215282',
                'name' => 'Joachim Georg Darjes',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:33:57',
                'updated_at' => '2018-08-10 01:33:57',
            ),
            157 => 
            array (
                'id' => 658,
                'qid' => 'Q44481',
                'name' => 'Pierre-Simon Laplace',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:34:15',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            158 => 
            array (
                'id' => 659,
                'qid' => 'Q50020',
                'name' => 'John Stuart Mill',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:34:42',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            159 => 
            array (
                'id' => 660,
                'qid' => 'Q11923378',
                'name' => 'Fèlix Vilarrúbias i Busquets',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:00',
                'updated_at' => '2018-08-10 01:35:00',
            ),
            160 => 
            array (
                'id' => 661,
                'qid' => 'Q381994',
                'name' => 'Kazimierz Twardowski',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:21',
                'updated_at' => '2018-08-10 01:35:21',
            ),
            161 => 
            array (
                'id' => 662,
                'qid' => 'Q692100',
                'name' => 'Alois Riegl',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:21',
                'updated_at' => '2018-08-10 01:35:21',
            ),
            162 => 
            array (
                'id' => 663,
                'qid' => 'Q560823',
                'name' => 'Louis Bachelier',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:37',
                'updated_at' => '2018-08-10 01:35:37',
            ),
            163 => 
            array (
                'id' => 664,
                'qid' => 'Q1225951',
                'name' => 'Dimitrie Pompeiu',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:37',
                'updated_at' => '2018-08-10 01:35:37',
            ),
            164 => 
            array (
                'id' => 665,
                'qid' => 'Q13234',
                'name' => 'Albert Sechehaye',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:40',
                'updated_at' => '2018-08-10 01:35:40',
            ),
            165 => 
            array (
                'id' => 666,
                'qid' => 'Q295393',
                'name' => 'Marcel Mauss',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:41',
                'updated_at' => '2018-08-10 01:35:41',
            ),
            166 => 
            array (
                'id' => 667,
                'qid' => 'Q61628',
                'name' => 'Eugen Fink',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:44',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            167 => 
            array (
                'id' => 668,
                'qid' => 'Q76749',
                'name' => 'Edith Stein',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:44',
                'updated_at' => '2018-08-12 22:44:23',
            ),
            168 => 
            array (
                'id' => 669,
                'qid' => 'Q132537',
                'name' => 'J. Robert Oppenheimer',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:52',
                'updated_at' => '2018-08-10 01:35:52',
            ),
            169 => 
            array (
                'id' => 670,
                'qid' => 'Q94018',
                'name' => 'Alfred Schütz',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:54',
                'updated_at' => '2018-08-10 01:35:54',
            ),
            170 => 
            array (
                'id' => 671,
                'qid' => 'Q461121',
                'name' => 'Harold Garfinkel',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:35:54',
                'updated_at' => '2018-08-10 01:35:54',
            ),
            171 => 
            array (
                'id' => 672,
                'qid' => 'Q3385436',
                'name' => 'Pierre Hassner',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:44',
                'updated_at' => '2018-08-10 01:36:44',
            ),
            172 => 
            array (
                'id' => 673,
                'qid' => 'Q452116',
                'name' => 'Julia Robinson',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:50',
                'updated_at' => '2018-08-10 01:36:50',
            ),
            173 => 
            array (
                'id' => 674,
                'qid' => 'Q78497',
                'name' => 'Paul Feyerabend',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            174 => 
            array (
                'id' => 675,
                'qid' => 'Q184980',
                'name' => 'Thomas Kuhn',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            175 => 
            array (
                'id' => 676,
                'qid' => 'Q296249',
                'name' => 'Imre Lakatos',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            176 => 
            array (
                'id' => 677,
                'qid' => 'Q404779',
                'name' => 'David Miller',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            177 => 
            array (
                'id' => 678,
                'qid' => 'Q1376025',
                'name' => 'Joseph Agassi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            178 => 
            array (
                'id' => 679,
                'qid' => 'Q1483576',
                'name' => 'Hubert Kiesewetter',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            179 => 
            array (
                'id' => 680,
                'qid' => 'Q1702073',
                'name' => 'John W. N. Watkins',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            180 => 
            array (
                'id' => 681,
                'qid' => 'Q2580994',
                'name' => 'W.W. Bartley, III',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            181 => 
            array (
                'id' => 682,
                'qid' => 'Q2636792',
                'name' => 'Alan Musgrave',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:36:52',
                'updated_at' => '2018-08-10 01:36:52',
            ),
            182 => 
            array (
                'id' => 683,
                'qid' => 'Q1691712',
                'name' => 'Joel Feinberg',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:37:09',
                'updated_at' => '2018-08-10 01:37:09',
            ),
            183 => 
            array (
                'id' => 684,
                'qid' => 'Q722347',
                'name' => 'Walter J. Ong',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:37:18',
                'updated_at' => '2018-08-10 01:37:18',
            ),
            184 => 
            array (
                'id' => 685,
                'qid' => 'Q249984',
                'name' => 'Robin Gandy',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:37:19',
                'updated_at' => '2018-08-10 01:37:19',
            ),
            185 => 
            array (
                'id' => 686,
                'qid' => 'Q3290713',
                'name' => 'Marguerite Léna',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:37:22',
                'updated_at' => '2018-08-10 01:37:22',
            ),
            186 => 
            array (
                'id' => 687,
                'qid' => 'Q468609',
                'name' => 'Paul B. Preciado',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:37:49',
                'updated_at' => '2018-08-10 01:37:49',
            ),
            187 => 
            array (
                'id' => 688,
                'qid' => 'Q836861',
                'name' => 'Zilu',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            188 => 
            array (
                'id' => 689,
                'qid' => 'Q837573',
                'name' => 'Zai Yu',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            189 => 
            array (
                'id' => 690,
                'qid' => 'Q840352',
                'name' => 'Ran Qiu',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            190 => 
            array (
                'id' => 691,
                'qid' => 'Q1039504',
                'name' => 'Duanmu Ci',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            191 => 
            array (
                'id' => 692,
                'qid' => 'Q1155960',
                'name' => 'Yan Hui',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            192 => 
            array (
                'id' => 693,
                'qid' => 'Q1207671',
                'name' => 'Zengzi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            193 => 
            array (
                'id' => 694,
                'qid' => 'Q8193981',
                'name' => 'Ran Yong',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            194 => 
            array (
                'id' => 695,
                'qid' => 'Q11447909',
                'name' => 'Zhuansun Shi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:18',
                'updated_at' => '2018-08-10 01:38:18',
            ),
            195 => 
            array (
                'id' => 696,
                'qid' => 'Q28959',
                'name' => 'Han Fei Zi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:35',
                'updated_at' => '2018-08-10 01:38:35',
            ),
            196 => 
            array (
                'id' => 697,
                'qid' => 'Q152919',
                'name' => 'Li Si',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:35',
                'updated_at' => '2018-08-10 01:38:35',
            ),
            197 => 
            array (
                'id' => 698,
                'qid' => 'Q4024378',
                'name' => 'Zhìkǎi',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:38:52',
                'updated_at' => '2018-08-10 01:38:52',
            ),
            198 => 
            array (
                'id' => 699,
                'qid' => 'Q379836',
                'name' => 'Liang Qichao',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:11',
                'updated_at' => '2018-08-12 22:44:24',
            ),
            199 => 
            array (
                'id' => 700,
                'qid' => 'Q317765',
                'name' => 'Bimbisara',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:37',
                'updated_at' => '2018-08-10 01:39:37',
            ),
            200 => 
            array (
                'id' => 701,
                'qid' => 'Q7633775',
                'name' => 'Sudharma Swami',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:37',
                'updated_at' => '2018-08-10 01:39:37',
            ),
            201 => 
            array (
                'id' => 702,
                'qid' => 'Q15304493',
                'name' => 'Indrabhuti Gautama',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:37',
                'updated_at' => '2018-08-10 01:39:37',
            ),
            202 => 
            array (
                'id' => 703,
                'qid' => 'Q188541',
                'name' => 'Chandragupta Maurya',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:40',
                'updated_at' => '2018-08-10 01:39:40',
            ),
            203 => 
            array (
                'id' => 704,
                'qid' => 'Q315526',
                'name' => 'Bindusara',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:40',
                'updated_at' => '2018-08-10 01:39:40',
            ),
            204 => 
            array (
                'id' => 705,
                'qid' => 'Q1777897',
                'name' => 'Umaswati',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:45',
                'updated_at' => '2018-08-12 22:44:24',
            ),
            205 => 
            array (
                'id' => 706,
                'qid' => 'Q541023',
                'name' => 'Dazu Huike',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:39:49',
                'updated_at' => '2018-08-10 01:39:49',
            ),
            206 => 
            array (
                'id' => 707,
                'qid' => 'Q777499',
                'name' => 'Govinda Bhagavatpada',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:40:03',
                'updated_at' => '2018-08-10 01:40:03',
            ),
            207 => 
            array (
                'id' => 708,
                'qid' => 'Q47478',
                'name' => 'Swami Vivekananda',
                'available' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:40:40',
                'updated_at' => '2018-08-12 22:44:24',
            ),
            208 => 
            array (
                'id' => 709,
                'qid' => 'Q558279',
                'name' => 'Hayashi Razan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            209 => 
            array (
                'id' => 710,
                'qid' => 'Q6563835',
                'name' => 'Naba Kassho',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            210 => 
            array (
                'id' => 711,
                'qid' => 'Q6564704',
                'name' => 'Hori Kyōan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            211 => 
            array (
                'id' => 712,
                'qid' => 'Q6564935',
                'name' => 'Matsunaga Shakugo',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            212 => 
            array (
                'id' => 713,
                'qid' => 'Q10862137',
                'name' => 'Toda Tameharu',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            213 => 
            array (
                'id' => 714,
                'qid' => 'Q11569640',
                'name' => 'Q11569640',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            214 => 
            array (
                'id' => 715,
                'qid' => 'Q11585666',
                'name' => 'Ishikawa Jōzan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            215 => 
            array (
                'id' => 716,
                'qid' => 'Q11630678',
                'name' => 'Suminokura Soan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:17',
                'updated_at' => '2018-08-10 01:41:17',
            ),
            216 => 
            array (
                'id' => 717,
                'qid' => 'Q3822280',
                'name' => 'Terao Magonojō',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:18',
                'updated_at' => '2018-08-10 01:41:18',
            ),
            217 => 
            array (
                'id' => 718,
                'qid' => 'Q1589061',
                'name' => 'Nankaku Hattori',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:23',
                'updated_at' => '2018-08-10 01:41:23',
            ),
            218 => 
            array (
                'id' => 719,
                'qid' => 'Q6563258',
                'name' => 'Dazai Shundai',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:23',
                'updated_at' => '2018-08-10 01:41:23',
            ),
            219 => 
            array (
                'id' => 720,
                'qid' => 'Q6565530',
                'name' => 'Yamagata Shūnan',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:23',
                'updated_at' => '2018-08-10 01:41:23',
            ),
            220 => 
            array (
                'id' => 721,
                'qid' => 'Q17220353',
                'name' => 'Suminoe Sōrō',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:23',
                'updated_at' => '2018-08-10 01:41:23',
            ),
            221 => 
            array (
                'id' => 722,
                'qid' => 'Q17988577',
                'name' => 'Andō Tōya',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:23',
                'updated_at' => '2018-08-10 01:41:23',
            ),
            222 => 
            array (
                'id' => 723,
                'qid' => 'Q18011508',
                'name' => 'Hirano Kinka',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:23',
                'updated_at' => '2018-08-10 01:41:23',
            ),
            223 => 
            array (
                'id' => 724,
                'qid' => 'Q18011513',
                'name' => 'Yamanoi Konron',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:23',
                'updated_at' => '2018-08-10 01:41:23',
            ),
            224 => 
            array (
                'id' => 725,
                'qid' => 'Q17218297',
                'name' => 'Suiō Genro',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:24',
                'updated_at' => '2018-08-10 01:41:24',
            ),
            225 => 
            array (
                'id' => 726,
                'qid' => 'Q3325272',
                'name' => 'Motoori Ōhira',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            226 => 
            array (
                'id' => 727,
                'qid' => 'Q6535199',
                'name' => 'Ishizuka Tatsumaro',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            227 => 
            array (
                'id' => 728,
                'qid' => 'Q6536652',
                'name' => 'Tanaka Ōhide',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            228 => 
            array (
                'id' => 729,
                'qid' => 'Q6537068',
                'name' => 'Nagase Masaki',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            229 => 
            array (
                'id' => 730,
                'qid' => 'Q6537152',
                'name' => 'Natsume Mikamaro',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            230 => 
            array (
                'id' => 731,
                'qid' => 'Q6537534',
                'name' => 'Hoashi Chōshū',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            231 => 
            array (
                'id' => 732,
                'qid' => 'Q6537795',
                'name' => 'Motoori Haruniwa',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            232 => 
            array (
                'id' => 733,
                'qid' => 'Q6538186',
                'name' => 'Yokoi Chiaki',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            233 => 
            array (
                'id' => 734,
                'qid' => 'Q18011502',
                'name' => 'Tanaka Michimaro',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            234 => 
            array (
                'id' => 735,
                'qid' => 'Q20042279',
                'name' => 'Hattori Nakatsune',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            235 => 
            array (
                'id' => 736,
                'qid' => 'Q22128631',
                'name' => 'Uematsu Arinobu',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-10 01:41:26',
                'updated_at' => '2018-08-10 01:41:26',
            ),
            236 => 
            array (
                'id' => 737,
                'qid' => 'Q61064',
                'name' => 'Wassily Kandinski',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:04',
                'updated_at' => '2018-08-12 22:35:04',
            ),
            237 => 
            array (
                'id' => 738,
                'qid' => 'Q34660',
                'name' => 'J. K. Rowling',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:11',
                'updated_at' => '2018-08-12 22:35:11',
            ),
            238 => 
            array (
                'id' => 739,
                'qid' => 'Q40909',
                'name' => 'Virginia Woolf',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:11',
                'updated_at' => '2018-08-12 22:35:11',
            ),
            239 => 
            array (
                'id' => 740,
                'qid' => 'Q180962',
                'name' => 'Norman Mailer',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:11',
                'updated_at' => '2018-08-12 22:35:11',
            ),
            240 => 
            array (
                'id' => 741,
                'qid' => 'Q183492',
                'name' => 'Margaret Atwood',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:11',
                'updated_at' => '2018-08-12 22:35:11',
            ),
            241 => 
            array (
                'id' => 742,
                'qid' => 'Q357108',
                'name' => 'Jeffrey Eugenides',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:11',
                'updated_at' => '2018-08-12 22:35:11',
            ),
            242 => 
            array (
                'id' => 743,
                'qid' => 'Q526994',
                'name' => 'Mathilde Blind',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:11',
                'updated_at' => '2018-08-12 22:35:11',
            ),
            243 => 
            array (
                'id' => 744,
                'qid' => 'Q7246461',
                'name' => 'Priya Basil',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:35:12',
                'updated_at' => '2018-08-12 22:35:12',
            ),
            244 => 
            array (
                'id' => 745,
                'qid' => 'Q28952240',
                'name' => 'Silvia Casalino',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:36:31',
                'updated_at' => '2018-08-12 22:36:31',
            ),
            245 => 
            array (
                'id' => 746,
                'qid' => 'Q6152257',
                'name' => 'Jane Gallop',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 22:36:45',
                'updated_at' => '2018-08-12 22:36:45',
            ),
            246 => 
            array (
                'id' => 747,
                'qid' => 'Q56061864',
                'name' => 'Q56061864',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-08-12 23:07:53',
                'updated_at' => '2018-08-12 23:07:53',
            ),
            247 => 
            array (
                'id' => 748,
                'qid' => 'Q76709',
                'name' => 'Hermann Cohen',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-28 23:15:52',
                'updated_at' => '2018-10-28 23:15:52',
            ),
            248 => 
            array (
                'id' => 749,
                'qid' => 'Q355903',
                'name' => 'Siger of Brabant',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 03:17:09',
                'updated_at' => '2018-10-29 03:17:09',
            ),
            249 => 
            array (
                'id' => 750,
                'qid' => 'Q481384',
                'name' => 'Ebn Meskavayh',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 03:22:02',
                'updated_at' => '2018-10-29 03:22:02',
            ),
            250 => 
            array (
                'id' => 751,
                'qid' => 'Q4226680',
                'name' => 'Q4226680',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:00:04',
                'updated_at' => '2018-10-29 04:00:04',
            ),
            251 => 
            array (
                'id' => 752,
                'qid' => 'Q20742885',
                'name' => 'Petite Meller',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:05:19',
                'updated_at' => '2018-10-29 04:05:19',
            ),
            252 => 
            array (
                'id' => 753,
                'qid' => 'Q282280',
                'name' => 'Vladimir Solovyov',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:13:38',
                'updated_at' => '2018-10-29 04:13:38',
            ),
            253 => 
            array (
                'id' => 754,
                'qid' => 'Q3380641',
                'name' => 'Philippe Roch',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:17:26',
                'updated_at' => '2018-10-29 04:17:26',
            ),
            254 => 
            array (
                'id' => 755,
                'qid' => 'Q1678730',
                'name' => 'Jaime Hurtado',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:19:08',
                'updated_at' => '2018-10-29 04:19:08',
            ),
            255 => 
            array (
                'id' => 756,
                'qid' => 'Q4305318',
                'name' => 'Natalia Moszkowska',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:19:08',
                'updated_at' => '2018-10-29 04:19:08',
            ),
            256 => 
            array (
                'id' => 757,
                'qid' => 'Q345641',
                'name' => 'Bernard Williams',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:31:54',
                'updated_at' => '2018-10-29 04:31:54',
            ),
            257 => 
            array (
                'id' => 758,
                'qid' => 'Q651943',
                'name' => 'signifier',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:34:20',
                'updated_at' => '2018-10-29 04:34:20',
            ),
            258 => 
            array (
                'id' => 759,
                'qid' => 'Q19274854',
                'name' => 'signified and signifier',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:34:20',
                'updated_at' => '2018-10-29 04:34:20',
            ),
            259 => 
            array (
                'id' => 760,
                'qid' => 'Q56642508',
                'name' => 'signified',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 04:34:20',
                'updated_at' => '2018-10-29 04:34:20',
            ),
            260 => 
            array (
                'id' => 761,
                'qid' => 'Q57173928',
                'name' => 'abject art',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 09:18:39',
                'updated_at' => '2018-10-29 09:18:39',
            ),
            261 => 
            array (
                'id' => 762,
                'qid' => 'Q242616',
                'name' => 'Patricia Churchland',
                'available' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-19 01:02:37',
                'updated_at' => '2018-11-19 01:02:37',
            ),
        ));
        
        
    }
}