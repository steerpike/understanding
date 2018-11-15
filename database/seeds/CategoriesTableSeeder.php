<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '6th-century BC philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ancient Greek metaphysicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Philosophers of ancient Ionia',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Presocratic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Metaphysics writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:30',
                'updated_at' => '2018-11-14 20:40:30',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mythological cosmologies',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:30',
                'updated_at' => '2018-11-14 20:40:30',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Natural philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:30',
                'updated_at' => '2018-11-14 20:40:30',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Pythagoreans',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:31',
                'updated_at' => '2018-11-14 20:40:31',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Ancient Greek music theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:31',
                'updated_at' => '2018-11-14 20:40:31',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:31',
                'updated_at' => '2018-11-14 20:40:31',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Philosophy of mathematics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Philosophy of music',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ancient Greek epistemologists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Greek theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Deist philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '5th-century BC philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:33',
                'updated_at' => '2018-11-14 20:40:33',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Ontologists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:33',
                'updated_at' => '2018-11-14 20:40:33',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Eleatic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Philosophers of Magna Graecia',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Pluralist philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Metic philosophers in Classical Athens',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Philosophers of science',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:35',
                'updated_at' => '2018-11-14 20:40:35',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Metaphysicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:35',
                'updated_at' => '2018-11-14 20:40:35',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Sophists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Philosophers of nihilism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Nihilists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ancient Athenian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Ancient Greek ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Epistemologists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Executed philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Irony theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Critics of religions',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Ancient Greek atomist philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Atheist philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:39',
                'updated_at' => '2018-11-14 20:40:39',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '4th-century BC philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:39',
                'updated_at' => '2018-11-14 20:40:39',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Cynic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:39',
                'updated_at' => '2018-11-14 20:40:39',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Cyrenaic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:40',
                'updated_at' => '2018-11-14 20:40:40',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Academic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:40',
                'updated_at' => '2018-11-14 20:40:40',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Ancient Greek metaphilosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Ancient Greek political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Philosophers of education',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Philosophers of language',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Philosophers of law',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Moral realists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:42',
                'updated_at' => '2018-11-14 20:40:42',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Classical Greek philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:42',
                'updated_at' => '2018-11-14 20:40:42',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Philosophers and tutors of Alexander the Great',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:43',
                'updated_at' => '2018-11-14 20:40:43',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Acting theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:43',
                'updated_at' => '2018-11-14 20:40:43',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Ancient Greek logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:44',
                'updated_at' => '2018-11-14 20:40:44',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Ancient Greek philosophers of language',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:44',
                'updated_at' => '2018-11-14 20:40:44',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Ancient Greek philosophers of mind',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:44',
                'updated_at' => '2018-11-14 20:40:44',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Peripatetic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Philosophers of ancient Chalcidice',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Philosophers of technology',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Rhetoric theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:46',
                'updated_at' => '2018-11-14 20:40:46',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Trope theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:46',
                'updated_at' => '2018-11-14 20:40:46',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Virtue ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:46',
                'updated_at' => '2018-11-14 20:40:46',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Ancient Skeptic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Hellenistic-era philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Indo-Greek religions and philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => '3rd-century BC philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Hellenistic-era philosophers in Athens',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Epicurean philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:48',
                'updated_at' => '2018-11-14 20:40:48',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Materialists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:48',
                'updated_at' => '2018-11-14 20:40:48',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Stoic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:49',
                'updated_at' => '2018-11-14 20:40:49',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Hellenistic-era philosophers from Anatolia',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:50',
                'updated_at' => '2018-11-14 20:40:50',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => '2nd-century BC philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:50',
                'updated_at' => '2018-11-14 20:40:50',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => '1st-century BC philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Roman-era Epicurean philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Roman-era philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Ancient Roman political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Philosophers of Roman Italy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Murdered philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Jewish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => '1st-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Philosophers who committed suicide',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Roman-era Stoic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Spanish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => '2nd-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:53',
                'updated_at' => '2018-11-14 20:40:53',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Stoicism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:53',
                'updated_at' => '2018-11-14 20:40:53',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Roman-era Skeptic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Roman-era philosophers in Rome',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Roman-era philosophers in Athens',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Roman-era philosophers in Alexandria',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => '3rd-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Egyptian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Classical mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Critics of atheism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => '4th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Neo-Pythagoreans',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Syrian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => '4th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => '4th-century Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => '5th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => '5th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => '5th-century Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => '5th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'African philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Ancient Roman saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Berber Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Christian ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Christian existentialists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Christian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Existentialist theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Music theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Numidian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            106 => 
            array (
                'id' => 107,
            'name' => 'Saints from Roman Africa (province)',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Systematic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Ancient Roman Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Philosophers of mathematics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => '6th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => '6th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Roman Catholic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => '6th-century Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Byzantine philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => '9th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Musical theorists of medieval Islam',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Medieval Arab philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Islamic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => '9th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => '9th-century Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Irish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Irish Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Medieval philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Roman Catholic mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Scholastic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => '10th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Medieval Jewish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Philosophers of Judaism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Persian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:01',
                'updated_at' => '2018-11-14 20:41:01',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Medieval Persian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:01',
                'updated_at' => '2018-11-14 20:41:01',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Aristotelian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:01',
                'updated_at' => '2018-11-14 20:41:01',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:02',
                'updated_at' => '2018-11-14 20:41:02',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => '11th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:02',
                'updated_at' => '2018-11-14 20:41:02',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => '12th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:03',
                'updated_at' => '2018-11-14 20:41:03',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => '11th-century Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:03',
                'updated_at' => '2018-11-14 20:41:03',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => '12th-century Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:03',
                'updated_at' => '2018-11-14 20:41:03',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => '11th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => '12th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Benedictine philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Benedictine saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Benedictine theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Pre-Reformation saints of the Lutheran liturgical calendar',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Medieval English theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Medieval French theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'English Roman Catholic saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'French Roman Catholic saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Burgundian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Pre-Reformation Anglican saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:06',
                'updated_at' => '2018-11-14 20:41:06',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Benedictine mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:06',
                'updated_at' => '2018-11-14 20:41:06',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'French logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:07',
                'updated_at' => '2018-11-14 20:41:07',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Italian Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:07',
                'updated_at' => '2018-11-14 20:41:07',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Medieval Italian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:07',
                'updated_at' => '2018-11-14 20:41:07',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => '12th-century Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => '13th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => '12th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => '13th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => '13th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Franciscan mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Franciscan saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Italian Roman Catholic saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Medieval Italian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'English philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => '13th-century Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:12',
                'updated_at' => '2018-11-14 20:41:12',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'German music theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'German philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'German Roman Catholic saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Medieval German theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Dominican mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:14',
                'updated_at' => '2018-11-14 20:41:14',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Dominican saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:14',
                'updated_at' => '2018-11-14 20:41:14',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Incorrupt saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:14',
                'updated_at' => '2018-11-14 20:41:14',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Alsatian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:15',
                'updated_at' => '2018-11-14 20:41:15',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'English music theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:15',
                'updated_at' => '2018-11-14 20:41:15',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Critics of Islam',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:16',
                'updated_at' => '2018-11-14 20:41:16',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Italian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:16',
                'updated_at' => '2018-11-14 20:41:16',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Italian Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:17',
                'updated_at' => '2018-11-14 20:41:17',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Roman Catholic moral theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:19',
                'updated_at' => '2018-11-14 20:41:19',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Dominican theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:19',
                'updated_at' => '2018-11-14 20:41:19',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Franciscan theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:20',
                'updated_at' => '2018-11-14 20:41:20',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Belgian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:20',
                'updated_at' => '2018-11-14 20:41:20',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Dutch philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:20',
                'updated_at' => '2018-11-14 20:41:20',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => '14th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:21',
                'updated_at' => '2018-11-14 20:41:21',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => '14th-century Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:21',
                'updated_at' => '2018-11-14 20:41:21',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => '14th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:21',
                'updated_at' => '2018-11-14 20:41:21',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'German Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:22',
                'updated_at' => '2018-11-14 20:41:22',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Rhineland mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:22',
                'updated_at' => '2018-11-14 20:41:22',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Scottish logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:23',
                'updated_at' => '2018-11-14 20:41:23',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Scottish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:25',
                'updated_at' => '2018-11-14 20:41:25',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'English logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:26',
                'updated_at' => '2018-11-14 20:41:26',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'English Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:27',
                'updated_at' => '2018-11-14 20:41:27',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => '14th-century Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:27',
                'updated_at' => '2018-11-14 20:41:27',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'French philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:28',
                'updated_at' => '2018-11-14 20:41:28',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Critics of the Catholic Church',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:29',
                'updated_at' => '2018-11-14 20:41:29',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Catalan philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:30',
                'updated_at' => '2018-11-14 20:41:30',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Christianity and Hellenistic philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:30',
                'updated_at' => '2018-11-14 20:41:30',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => '15th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:30',
                'updated_at' => '2018-11-14 20:41:30',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => '15th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:31',
                'updated_at' => '2018-11-14 20:41:31',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => '15th-century Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:31',
                'updated_at' => '2018-11-14 20:41:31',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Perennial philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:32',
                'updated_at' => '2018-11-14 20:41:32',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Dutch Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:33',
                'updated_at' => '2018-11-14 20:41:33',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Early Modern philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:34',
                'updated_at' => '2018-11-14 20:41:34',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Italian political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:34',
                'updated_at' => '2018-11-14 20:41:34',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Military theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:34',
                'updated_at' => '2018-11-14 20:41:34',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => '16th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Critics of multiculturalism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => '16th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Anglican saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'English saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => '16th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:36',
                'updated_at' => '2018-11-14 20:41:36',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => '16th-century German Protestant theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:36',
                'updated_at' => '2018-11-14 20:41:36',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Burials at All Saints\' Church, Wittenberg',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:36',
                'updated_at' => '2018-11-14 20:41:36',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'German Lutheran theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:37',
                'updated_at' => '2018-11-14 20:41:37',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Protestant mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:38',
                'updated_at' => '2018-11-14 20:41:38',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Calvinist and Reformed philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:39',
                'updated_at' => '2018-11-14 20:41:39',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Theologians from the Republic of Geneva',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:39',
                'updated_at' => '2018-11-14 20:41:39',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => '16th-century Calvinist and Reformed theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:40',
                'updated_at' => '2018-11-14 20:41:40',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => '16th-century French theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:40',
                'updated_at' => '2018-11-14 20:41:40',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'French Calvinist and Reformed theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:41',
                'updated_at' => '2018-11-14 20:41:41',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => '16th-century French philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:41',
                'updated_at' => '2018-11-14 20:41:41',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => '16th-century French Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:42',
                'updated_at' => '2018-11-14 20:41:42',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Atomists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:43',
                'updated_at' => '2018-11-14 20:41:43',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => '17th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:44',
                'updated_at' => '2018-11-14 20:41:44',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Jesuit philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:44',
                'updated_at' => '2018-11-14 20:41:44',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Spanish Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:46',
                'updated_at' => '2018-11-14 20:41:46',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => '17th-century Calvinist and Reformed theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:49',
                'updated_at' => '2018-11-14 20:41:49',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => '17th-century Dutch philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Dutch Calvinist and Reformed theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Dutch political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => '17th-century Dutch political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:51',
                'updated_at' => '2018-11-14 20:41:51',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Philosophy and thought in the Dutch Republic',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:51',
                'updated_at' => '2018-11-14 20:41:51',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => '17th-century Dutch theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:51',
                'updated_at' => '2018-11-14 20:41:51',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Number theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'French music theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'English political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => '17th-century French Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Consciousness researchers and theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:53',
                'updated_at' => '2018-11-14 20:41:53',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Critics of animal rights',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:53',
                'updated_at' => '2018-11-14 20:41:53',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Enlightenment philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:53',
                'updated_at' => '2018-11-14 20:41:53',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => '17th-century French philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:54',
                'updated_at' => '2018-11-14 20:41:54',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Philosophers of mind',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:54',
                'updated_at' => '2018-11-14 20:41:54',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'English political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:56',
                'updated_at' => '2018-11-14 20:41:56',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => '17th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:58',
                'updated_at' => '2018-11-14 20:41:58',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => '17th-century English philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => '17th-century English theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Anglican philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'English Anglican theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => '17th-century French theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:01',
                'updated_at' => '2018-11-14 20:42:01',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Probability theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:01',
                'updated_at' => '2018-11-14 20:42:01',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Flemish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:02',
                'updated_at' => '2018-11-14 20:42:02',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => '17th-century Irish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:04',
                'updated_at' => '2018-11-14 20:42:04',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => '17th-century Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:06',
                'updated_at' => '2018-11-14 20:42:06',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Critics of Judaism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:06',
                'updated_at' => '2018-11-14 20:42:06',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => '18th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:12',
                'updated_at' => '2018-11-14 20:42:12',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => '18th-century French philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:13',
                'updated_at' => '2018-11-14 20:42:13',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => '18th-century Dutch philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:13',
                'updated_at' => '2018-11-14 20:42:13',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Protestant philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:13',
                'updated_at' => '2018-11-14 20:42:13',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'English feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:14',
                'updated_at' => '2018-11-14 20:42:14',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Feminist philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:14',
                'updated_at' => '2018-11-14 20:42:14',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Moral philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:14',
                'updated_at' => '2018-11-14 20:42:14',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'English theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:15',
                'updated_at' => '2018-11-14 20:42:15',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Feminist theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:15',
                'updated_at' => '2018-11-14 20:42:15',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => '18th-century Irish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:15',
                'updated_at' => '2018-11-14 20:42:15',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => '18th-century German philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:16',
                'updated_at' => '2018-11-14 20:42:16',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => '17th-century German philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:16',
                'updated_at' => '2018-11-14 20:42:16',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'German logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:16',
                'updated_at' => '2018-11-14 20:42:16',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'German political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:17',
                'updated_at' => '2018-11-14 20:42:17',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'French materialists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:18',
                'updated_at' => '2018-11-14 20:42:18',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Social philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:19',
                'updated_at' => '2018-11-14 20:42:19',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => '18th-century British philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:20',
                'updated_at' => '2018-11-14 20:42:20',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Irish natural philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:22',
                'updated_at' => '2018-11-14 20:42:22',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Philosophers of history',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:23',
                'updated_at' => '2018-11-14 20:42:23',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => '18th-century Anglican theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:23',
                'updated_at' => '2018-11-14 20:42:23',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Critics of deism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:24',
                'updated_at' => '2018-11-14 20:42:24',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Philosophers of psychology',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:26',
                'updated_at' => '2018-11-14 20:42:26',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Philosophers of sexuality',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:27',
                'updated_at' => '2018-11-14 20:42:27',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'British Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:28',
                'updated_at' => '2018-11-14 20:42:28',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Philosophers of art',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:29',
                'updated_at' => '2018-11-14 20:42:29',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Philosophers of religion',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:29',
                'updated_at' => '2018-11-14 20:42:29',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Philosophers from the Republic of Geneva',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:30',
                'updated_at' => '2018-11-14 20:42:30',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:30',
                'updated_at' => '2018-11-14 20:42:30',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'French ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:32',
                'updated_at' => '2018-11-14 20:42:32',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Scottish business theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:34',
                'updated_at' => '2018-11-14 20:42:34',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Welsh philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:34',
                'updated_at' => '2018-11-14 20:42:34',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Continental philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:35',
                'updated_at' => '2018-11-14 20:42:35',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Kantian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:35',
                'updated_at' => '2018-11-14 20:42:35',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => '18th-century German Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:36',
                'updated_at' => '2018-11-14 20:42:36',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => '18th-century German Protestant theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Irish political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'British political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'British political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'American political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:38',
                'updated_at' => '2018-11-14 20:42:38',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Philosophers from Virginia',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:38',
                'updated_at' => '2018-11-14 20:42:38',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => '18th-century American philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => '19th-century American philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => '19th-century British philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'British ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Social philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:40',
                'updated_at' => '2018-11-14 20:42:40',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'English feminist writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:41',
                'updated_at' => '2018-11-14 20:42:41',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Feminist theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Feminist writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'German literary theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => '19th-century German philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => '19th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:43',
                'updated_at' => '2018-11-14 20:42:43',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'French political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:43',
                'updated_at' => '2018-11-14 20:42:43',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Knights of the Order of Saints Maurice and Lazarus',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:44',
                'updated_at' => '2018-11-14 20:42:44',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => '19th-century German Protestant theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:44',
                'updated_at' => '2018-11-14 20:42:44',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Christian Universalist theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:45',
                'updated_at' => '2018-11-14 20:42:45',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Death of God theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:46',
                'updated_at' => '2018-11-14 20:42:46',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'German historians of philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:46',
                'updated_at' => '2018-11-14 20:42:46',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Hegelian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:46',
                'updated_at' => '2018-11-14 20:42:46',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Scottish political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:47',
                'updated_at' => '2018-11-14 20:42:47',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Lutheran philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:48',
                'updated_at' => '2018-11-14 20:42:48',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Czech philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:48',
                'updated_at' => '2018-11-14 20:42:48',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Mathematical logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:48',
                'updated_at' => '2018-11-14 20:42:48',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Presidents of the Geological Society of London',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:50',
                'updated_at' => '2018-11-14 20:42:50',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Philosophers of social science',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:50',
                'updated_at' => '2018-11-14 20:42:50',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Structural functionalism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:50',
                'updated_at' => '2018-11-14 20:42:50',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => '19th-century theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:51',
                'updated_at' => '2018-11-14 20:42:51',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Philosophers from Massachusetts',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:51',
                'updated_at' => '2018-11-14 20:42:51',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'French political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:52',
                'updated_at' => '2018-11-14 20:42:52',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Critics of work and the work ethic',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:52',
                'updated_at' => '2018-11-14 20:42:52',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => '19th-century English philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:53',
                'updated_at' => '2018-11-14 20:42:53',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Feminist economists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Individualist feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Male feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Voting theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Anarchist theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Fellows of the Royal Entomological Society',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Fellows of the Zoological Society of London',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Human evolution theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'American feminist writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:56',
                'updated_at' => '2018-11-14 20:42:56',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => '19th-century Protestant theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:56',
                'updated_at' => '2018-11-14 20:42:56',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Danish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:57',
                'updated_at' => '2018-11-14 20:42:57',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Ecological succession',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:57',
                'updated_at' => '2018-11-14 20:42:57',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => '19th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:58',
                'updated_at' => '2018-11-14 20:42:58',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'African-American feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:58',
                'updated_at' => '2018-11-14 20:42:58',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'American feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:58',
                'updated_at' => '2018-11-14 20:42:58',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Christian female saints of the Late Modern era',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Methodist feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Russian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Revolution theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Critics of Marxism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:00',
                'updated_at' => '2018-11-14 20:43:00',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Christian feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:00',
                'updated_at' => '2018-11-14 20:43:00',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Marxist theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:01',
                'updated_at' => '2018-11-14 20:43:01',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Philosophers of economics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:01',
                'updated_at' => '2018-11-14 20:43:01',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'German political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:02',
                'updated_at' => '2018-11-14 20:43:02',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Urban theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:02',
                'updated_at' => '2018-11-14 20:43:02',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Libertarian theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:03',
                'updated_at' => '2018-11-14 20:43:03',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Quaker feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:04',
                'updated_at' => '2018-11-14 20:43:04',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'White\'s Professors of Moral Philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:05',
                'updated_at' => '2018-11-14 20:43:05',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Cambridge University Moral Sciences Club',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:05',
                'updated_at' => '2018-11-14 20:43:05',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => '20th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:06',
                'updated_at' => '2018-11-14 20:43:06',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Austrian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:06',
                'updated_at' => '2018-11-14 20:43:06',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => '20th-century American philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:07',
                'updated_at' => '2018-11-14 20:43:07',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'American logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:07',
                'updated_at' => '2018-11-14 20:43:07',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Critical theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:07',
                'updated_at' => '2018-11-14 20:43:07',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'American semioticians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Lattice theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Modal logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Philosophers from Pennsylvania',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            363 => 
            array (
                'id' => 364,
            'name' => 'Philosophers from New York (state)',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:09',
                'updated_at' => '2018-11-14 20:43:09',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Presidents of the American Psychological Association',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:09',
                'updated_at' => '2018-11-14 20:43:09',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Atheist existentialists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:10',
                'updated_at' => '2018-11-14 20:43:10',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Critics of Christianity',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:10',
                'updated_at' => '2018-11-14 20:43:10',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Existentialists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:10',
                'updated_at' => '2018-11-14 20:43:10',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Relativity theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:11',
                'updated_at' => '2018-11-14 20:43:11',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'British philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:11',
                'updated_at' => '2018-11-14 20:43:11',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Analytic philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:12',
                'updated_at' => '2018-11-14 20:43:12',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Set theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:13',
                'updated_at' => '2018-11-14 20:43:13',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Wykeham Professors of Logic',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:13',
                'updated_at' => '2018-11-14 20:43:13',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => '20th-century French philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:14',
                'updated_at' => '2018-11-14 20:43:14',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Chaos theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Dynamical systems theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Philosophers from California',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Semioticians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Structuralists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:16',
                'updated_at' => '2018-11-14 20:43:16',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => '19th-century French philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:16',
                'updated_at' => '2018-11-14 20:43:16',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => '20th-century Italian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:16',
                'updated_at' => '2018-11-14 20:43:16',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => '20th-century German philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:17',
                'updated_at' => '2018-11-14 20:43:17',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => '19th-century educational theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:17',
                'updated_at' => '2018-11-14 20:43:17',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => '20th-century educational theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:17',
                'updated_at' => '2018-11-14 20:43:17',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Australian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:18',
                'updated_at' => '2018-11-14 20:43:18',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Process theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Members of the Académie des sciences morales et politiques',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Process philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'American educational theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'American political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:20',
                'updated_at' => '2018-11-14 20:43:20',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Philosophy of education',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:20',
                'updated_at' => '2018-11-14 20:43:20',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Philosophers from Illinois',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:20',
                'updated_at' => '2018-11-14 20:43:20',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => '20th-century English theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:21',
                'updated_at' => '2018-11-14 20:43:21',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'American theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:22',
                'updated_at' => '2018-11-14 20:43:22',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Rationality theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:23',
                'updated_at' => '2018-11-14 20:43:23',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Basque philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:23',
                'updated_at' => '2018-11-14 20:43:23',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Philosophy of time',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:24',
                'updated_at' => '2018-11-14 20:43:24',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'American philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:24',
                'updated_at' => '2018-11-14 20:43:24',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Anarcha-feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:24',
                'updated_at' => '2018-11-14 20:43:24',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Atheist feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:25',
                'updated_at' => '2018-11-14 20:43:25',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Jewish feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:25',
                'updated_at' => '2018-11-14 20:43:25',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Socialist feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:25',
                'updated_at' => '2018-11-14 20:43:25',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Israel Prize in humanities recipients who were philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Relational ethics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Austrian Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Israeli philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Jewish existentialists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:28',
                'updated_at' => '2018-11-14 20:43:28',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => '20th-century Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:28',
                'updated_at' => '2018-11-14 20:43:28',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => '19th-century Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:28',
                'updated_at' => '2018-11-14 20:43:28',
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'British historians of philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:29',
                'updated_at' => '2018-11-14 20:43:29',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'British logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:30',
                'updated_at' => '2018-11-14 20:43:30',
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'John F. Kennedy conspiracy theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:30',
                'updated_at' => '2018-11-14 20:43:30',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => '19th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => '20th-century Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Eastern Orthodox mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Eastern Orthodox philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Russian Christian mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'German semioticians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:32',
                'updated_at' => '2018-11-14 20:43:32',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'British scholars of ancient Greek philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:33',
                'updated_at' => '2018-11-14 20:43:33',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => '20th-century French Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:33',
                'updated_at' => '2018-11-14 20:43:33',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'French paleontologists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:34',
                'updated_at' => '2018-11-14 20:43:34',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Jesuit theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:34',
                'updated_at' => '2018-11-14 20:43:34',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Logical positivism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:35',
                'updated_at' => '2018-11-14 20:43:35',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Vienna Circle',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:35',
                'updated_at' => '2018-11-14 20:43:35',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Philosophy of biology',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:37',
                'updated_at' => '2018-11-14 20:43:37',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Thomist philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:37',
                'updated_at' => '2018-11-14 20:43:37',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'American philosophy academics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:38',
                'updated_at' => '2018-11-14 20:43:38',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Philosophy teachers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:39',
                'updated_at' => '2018-11-14 20:43:39',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Hungarian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:39',
                'updated_at' => '2018-11-14 20:43:39',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Literary theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:40',
                'updated_at' => '2018-11-14 20:43:40',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Philosophy academics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:40',
                'updated_at' => '2018-11-14 20:43:40',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Christian socialist theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:41',
                'updated_at' => '2018-11-14 20:43:41',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'English historians of philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:41',
                'updated_at' => '2018-11-14 20:43:41',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Austrian logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:42',
                'updated_at' => '2018-11-14 20:43:42',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Ordinary language philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:42',
                'updated_at' => '2018-11-14 20:43:42',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Wittgensteinian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:43',
                'updated_at' => '2018-11-14 20:43:43',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Enactive cognition',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:44',
                'updated_at' => '2018-11-14 20:43:44',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'UCLA Philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:47',
                'updated_at' => '2018-11-14 20:43:47',
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Philosophy of logic',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:47',
                'updated_at' => '2018-11-14 20:43:47',
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Philosophers from Michigan',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:48',
                'updated_at' => '2018-11-14 20:43:48',
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Philosophers from Montana',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:49',
                'updated_at' => '2018-11-14 20:43:49',
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Philosophers from Ohio',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:49',
                'updated_at' => '2018-11-14 20:43:49',
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Polish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:49',
                'updated_at' => '2018-11-14 20:43:49',
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Philosophers from Connecticut',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:50',
                'updated_at' => '2018-11-14 20:43:50',
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'American historians of philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:53',
                'updated_at' => '2018-11-14 20:43:53',
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'American Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:53',
                'updated_at' => '2018-11-14 20:43:53',
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'German Jewish theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:55',
                'updated_at' => '2018-11-14 20:43:55',
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'German scholars of ancient Greek philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:55',
                'updated_at' => '2018-11-14 20:43:55',
            ),
            449 => 
            array (
                'id' => 450,
                'name' => '20th-century British philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:57',
                'updated_at' => '2018-11-14 20:43:57',
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Waynflete Professors of Metaphysical Philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:58',
                'updated_at' => '2018-11-14 20:43:58',
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Poststructuralists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:00',
                'updated_at' => '2018-11-14 20:44:00',
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'French semioticians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:00',
                'updated_at' => '2018-11-14 20:44:00',
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Computability theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:00',
                'updated_at' => '2018-11-14 20:44:00',
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Polish logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:01',
                'updated_at' => '2018-11-14 20:44:01',
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Model theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:01',
                'updated_at' => '2018-11-14 20:44:01',
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Kyoto laureates in Arts and Philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:47:58',
                'updated_at' => '2018-11-14 20:47:58',
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'American ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:47:59',
                'updated_at' => '2018-11-14 20:47:59',
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Female critics of feminism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:04',
                'updated_at' => '2018-11-14 20:48:04',
            ),
            459 => 
            array (
                'id' => 460,
                'name' => '20th-century Russian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:05',
                'updated_at' => '2018-11-14 20:48:05',
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Lithuanian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:05',
                'updated_at' => '2018-11-14 20:48:05',
            ),
            461 => 
            array (
                'id' => 462,
                'name' => '20th-century French theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:06',
                'updated_at' => '2018-11-14 20:48:06',
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Contemporary philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:06',
                'updated_at' => '2018-11-14 20:48:06',
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Bisexual feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:09',
                'updated_at' => '2018-11-14 20:48:09',
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Feminist studies scholars',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'French feminist writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'French feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Marxist feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Action theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:14',
                'updated_at' => '2018-11-14 20:48:14',
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Canadian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:14',
                'updated_at' => '2018-11-14 20:48:14',
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Communication theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:14',
                'updated_at' => '2018-11-14 20:48:14',
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Literacy and society theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Literary critics of English',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Media theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Theorists on Western civilization',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Presidents of the Metaphysical Society of America',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:16',
                'updated_at' => '2018-11-14 20:48:16',
            ),
            476 => 
            array (
                'id' => 477,
                'name' => '21st-century French philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:17',
                'updated_at' => '2018-11-14 20:48:17',
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'French literary theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:17',
                'updated_at' => '2018-11-14 20:48:17',
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Metaphor theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:17',
                'updated_at' => '2018-11-14 20:48:17',
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Stanford University Department of Philosophy faculty',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:19',
                'updated_at' => '2018-11-14 20:48:19',
            ),
            480 => 
            array (
                'id' => 481,
                'name' => '21st-century American philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:21',
                'updated_at' => '2018-11-14 20:48:21',
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Deontological ethics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:22',
                'updated_at' => '2018-11-14 20:48:22',
            ),
            482 => 
            array (
                'id' => 483,
                'name' => '21st-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:22',
                'updated_at' => '2018-11-14 20:48:22',
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Critics of postmodernism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:23',
                'updated_at' => '2018-11-14 20:48:23',
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Martiniquais philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:23',
                'updated_at' => '2018-11-14 20:48:23',
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'French historians of philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:24',
                'updated_at' => '2018-11-14 20:48:24',
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Philosophy articles needing expert attention',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:25',
                'updated_at' => '2018-11-14 20:48:25',
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Structuralism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:26',
                'updated_at' => '2018-11-14 20:48:26',
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Mennonite theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:27',
                'updated_at' => '2018-11-14 20:48:27',
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Cognitive scientists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:28',
                'updated_at' => '2018-11-14 20:48:28',
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Critics of neoconservatism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:29',
                'updated_at' => '2018-11-14 20:48:29',
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Fellows of the Cognitive Science Society',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:29',
                'updated_at' => '2018-11-14 20:48:29',
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Propaganda theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:29',
                'updated_at' => '2018-11-14 20:48:29',
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Hyperreality theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:31',
                'updated_at' => '2018-11-14 20:48:31',
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Finnish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:34',
                'updated_at' => '2018-11-14 20:48:34',
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Game theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:34',
                'updated_at' => '2018-11-14 20:48:34',
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Scottish political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:35',
                'updated_at' => '2018-11-14 20:48:35',
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Scottish historians of philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:35',
                'updated_at' => '2018-11-14 20:48:35',
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Philosophers from Indiana',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:35',
                'updated_at' => '2018-11-14 20:48:35',
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'American scholars of ancient Greek philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:36',
                'updated_at' => '2018-11-14 20:48:36',
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Canadian political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:41',
                'updated_at' => '2018-11-14 20:48:41',
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Canadian political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:41',
                'updated_at' => '2018-11-14 20:48:41',
            ),
            2 => 
            array (
                'id' => 503,
                'name' => '20th-century theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:43',
                'updated_at' => '2018-11-14 20:48:43',
            ),
            3 => 
            array (
                'id' => 504,
                'name' => '21st-century theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:43',
                'updated_at' => '2018-11-14 20:48:43',
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Maoist theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:46',
                'updated_at' => '2018-11-14 20:48:46',
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Moroccan philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:46',
                'updated_at' => '2018-11-14 20:48:46',
            ),
            6 => 
            array (
                'id' => 507,
            'name' => 'Critics of Objectivism (Ayn Rand)',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:47',
                'updated_at' => '2018-11-14 20:48:47',
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Philosophy of Robert Nozick',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:48',
                'updated_at' => '2018-11-14 20:48:48',
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'American metaphysics writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:49',
                'updated_at' => '2018-11-14 20:48:49',
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Philosophers from Nebraska',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:50',
                'updated_at' => '2018-11-14 20:48:50',
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Philosopher\'s Annual Prize winners',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:51',
                'updated_at' => '2018-11-14 20:48:51',
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Philosophers of culture',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:52',
                'updated_at' => '2018-11-14 20:48:52',
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Scholars of modern philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:52',
                'updated_at' => '2018-11-14 20:48:52',
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Literary critics of Basque',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:52',
                'updated_at' => '2018-11-14 20:48:52',
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Meta-ethics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:53',
                'updated_at' => '2018-11-14 20:48:53',
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Indian feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:54',
                'updated_at' => '2018-11-14 20:48:54',
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:54',
                'updated_at' => '2018-11-14 20:48:54',
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Contemporary Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:54',
                'updated_at' => '2018-11-14 20:48:54',
            ),
            18 => 
            array (
                'id' => 519,
                'name' => '21st-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:55',
                'updated_at' => '2018-11-14 20:48:55',
            ),
            19 => 
            array (
                'id' => 520,
                'name' => '20th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:55',
                'updated_at' => '2018-11-14 20:48:55',
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Bioethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:56',
                'updated_at' => '2018-11-14 20:48:56',
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Environmental philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:56',
                'updated_at' => '2018-11-14 20:48:56',
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Film theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:57',
                'updated_at' => '2018-11-14 20:48:57',
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Slovenian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:57',
                'updated_at' => '2018-11-14 20:48:57',
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Slovenian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:58',
                'updated_at' => '2018-11-14 20:48:58',
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Atheist theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:58',
                'updated_at' => '2018-11-14 20:48:58',
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'African-American philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:59',
                'updated_at' => '2018-11-14 20:48:59',
            ),
            27 => 
            array (
                'id' => 528,
            'name' => 'Union Theological Seminary (New York City) faculty',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:59',
                'updated_at' => '2018-11-14 20:48:59',
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Framing theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:00',
                'updated_at' => '2018-11-14 20:49:00',
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Lesbian feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'Postmodern feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Queer theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Transfeminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            33 => 
            array (
                'id' => 534,
            'name' => 'Legalism (Chinese philosophy)',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:02',
                'updated_at' => '2018-11-14 20:49:02',
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Zhou dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:02',
                'updated_at' => '2018-11-14 20:49:02',
            ),
            35 => 
            array (
                'id' => 536,
            'name' => 'Philosophers from Lu (state)',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:02',
                'updated_at' => '2018-11-14 20:49:02',
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'People whose existence is disputed',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:03',
                'updated_at' => '2018-11-14 20:49:03',
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Chinese philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:03',
                'updated_at' => '2018-11-14 20:49:03',
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Philosophy books',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:03',
                'updated_at' => '2018-11-14 20:49:03',
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Chinese ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Chinese logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Chinese political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Moral psychology',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'History of logic',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:05',
                'updated_at' => '2018-11-14 20:49:05',
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Ancient Chinese philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:05',
                'updated_at' => '2018-11-14 20:49:05',
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Qin dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:06',
                'updated_at' => '2018-11-14 20:49:06',
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Philosophers from Henan',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:06',
                'updated_at' => '2018-11-14 20:49:06',
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Philosophers from Anhui',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:08',
                'updated_at' => '2018-11-14 20:49:08',
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Philosophers from Shanxi',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:08',
                'updated_at' => '2018-11-14 20:49:08',
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Philosophers from Shandong',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'Han dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Philosophers from Hebei',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Three Kingdoms philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Philosophers from Zhejiang',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:10',
                'updated_at' => '2018-11-14 20:49:10',
            ),
            54 => 
            array (
                'id' => 555,
            'name' => 'Jin dynasty (265-420) philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:10',
                'updated_at' => '2018-11-14 20:49:10',
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Buddhist philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:11',
                'updated_at' => '2018-11-14 20:49:11',
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'Sixteen Kingdoms philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:11',
                'updated_at' => '2018-11-14 20:49:11',
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Philosophers from Shaanxi',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:11',
                'updated_at' => '2018-11-14 20:49:11',
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Philosophers from Jiangsu',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            59 => 
            array (
                'id' => 560,
                'name' => '7th-century philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Northern and Southern dynasties philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Sui dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Tang dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Philosophers from Gansu',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:13',
                'updated_at' => '2018-11-14 20:49:13',
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Critics of Buddhism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:13',
                'updated_at' => '2018-11-14 20:49:13',
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'Philosophers from Sichuan',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:13',
                'updated_at' => '2018-11-14 20:49:13',
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Song dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:14',
                'updated_at' => '2018-11-14 20:49:14',
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Philosophers from Hubei',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:15',
                'updated_at' => '2018-11-14 20:49:15',
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'Philosophers from Hunan',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:15',
                'updated_at' => '2018-11-14 20:49:15',
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Philosophers from Fujian',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:16',
                'updated_at' => '2018-11-14 20:49:16',
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Philosophers from Jiangxi',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:16',
                'updated_at' => '2018-11-14 20:49:16',
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Qing dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:17',
                'updated_at' => '2018-11-14 20:49:17',
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'Ming dynasty philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:17',
                'updated_at' => '2018-11-14 20:49:17',
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Philosophers from Guangdong',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:17',
                'updated_at' => '2018-11-14 20:49:17',
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Cao Dai saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:18',
                'updated_at' => '2018-11-14 20:49:18',
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Chinese feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:20',
                'updated_at' => '2018-11-14 20:49:20',
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Republic of China philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:20',
                'updated_at' => '2018-11-14 20:49:20',
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'Contemporary Chinese philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:20',
                'updated_at' => '2018-11-14 20:49:20',
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Taiwanese philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:21',
                'updated_at' => '2018-11-14 20:49:21',
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Historians of philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:21',
                'updated_at' => '2018-11-14 20:49:21',
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'People\'s Republic of China philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:21',
                'updated_at' => '2018-11-14 20:49:21',
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'New Confucian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:22',
                'updated_at' => '2018-11-14 20:49:22',
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Hong Kong philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:22',
                'updated_at' => '2018-11-14 20:49:22',
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Philosophers from Shanghai',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:23',
                'updated_at' => '2018-11-14 20:49:23',
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Philosophers from Beijing',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:23',
                'updated_at' => '2018-11-14 20:49:23',
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Guerrilla warfare theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:24',
                'updated_at' => '2018-11-14 20:49:24',
            ),
            86 => 
            array (
                'id' => 587,
                'name' => '6th-century BC Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:25',
                'updated_at' => '2018-11-14 20:49:25',
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'Ancient Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:25',
                'updated_at' => '2018-11-14 20:49:25',
            ),
            88 => 
            array (
                'id' => 589,
                'name' => '5th-century BC Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:26',
                'updated_at' => '2018-11-14 20:49:26',
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'Hindu philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:26',
                'updated_at' => '2018-11-14 20:49:26',
            ),
            90 => 
            array (
                'id' => 591,
                'name' => '4th-century BC Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:26',
                'updated_at' => '2018-11-14 20:49:26',
            ),
            91 => 
            array (
                'id' => 592,
                'name' => '4th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'Epistemology literature',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'Logic literature',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Metaphysics literature',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            95 => 
            array (
                'id' => 596,
                'name' => '3rd-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            96 => 
            array (
                'id' => 597,
                'name' => '2nd-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:28',
                'updated_at' => '2018-11-14 20:49:28',
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Jain philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:28',
                'updated_at' => '2018-11-14 20:49:28',
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Buddhist logic',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:29',
                'updated_at' => '2018-11-14 20:49:29',
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Indian logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:29',
                'updated_at' => '2018-11-14 20:49:29',
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Pakistani philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:29',
                'updated_at' => '2018-11-14 20:49:29',
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Philosophy of love',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:30',
                'updated_at' => '2018-11-14 20:49:30',
            ),
            102 => 
            array (
                'id' => 603,
                'name' => '6th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:30',
                'updated_at' => '2018-11-14 20:49:30',
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Eastern philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:31',
                'updated_at' => '2018-11-14 20:49:31',
            ),
            104 => 
            array (
                'id' => 605,
                'name' => '5th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:31',
                'updated_at' => '2018-11-14 20:49:31',
            ),
            105 => 
            array (
                'id' => 606,
                'name' => '8th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:32',
                'updated_at' => '2018-11-14 20:49:32',
            ),
            106 => 
            array (
                'id' => 607,
                'name' => '10th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:32',
                'updated_at' => '2018-11-14 20:49:32',
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Philosophers of Mithila',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:32',
                'updated_at' => '2018-11-14 20:49:32',
            ),
            108 => 
            array (
                'id' => 609,
                'name' => '7th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:33',
                'updated_at' => '2018-11-14 20:49:33',
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'Advaitin philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:34',
                'updated_at' => '2018-11-14 20:49:34',
            ),
            110 => 
            array (
                'id' => 611,
                'name' => '9th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:34',
                'updated_at' => '2018-11-14 20:49:34',
            ),
            111 => 
            array (
                'id' => 612,
                'name' => '11th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            112 => 
            array (
                'id' => 613,
                'name' => '12th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Vishishtadvaita Vedanta',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Vaishnava saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Hindu mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Hindu saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Lingayat saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            118 => 
            array (
                'id' => 619,
                'name' => '13th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            119 => 
            array (
                'id' => 620,
                'name' => '14th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:38',
                'updated_at' => '2018-11-14 20:49:38',
            ),
            120 => 
            array (
                'id' => 621,
                'name' => '15th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:39',
                'updated_at' => '2018-11-14 20:49:39',
            ),
            121 => 
            array (
                'id' => 622,
                'name' => '16th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:39',
                'updated_at' => '2018-11-14 20:49:39',
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Sant Mat gurus',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:39',
                'updated_at' => '2018-11-14 20:49:39',
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Dalit saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:41',
                'updated_at' => '2018-11-14 20:49:41',
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Sikh gurus',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:41',
                'updated_at' => '2018-11-14 20:49:41',
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'Sikhism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:41',
                'updated_at' => '2018-11-14 20:49:41',
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'Bengali philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:42',
                'updated_at' => '2018-11-14 20:49:42',
            ),
            127 => 
            array (
                'id' => 628,
                'name' => '17th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:42',
                'updated_at' => '2018-11-14 20:49:42',
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Indian Sufi saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:43',
                'updated_at' => '2018-11-14 20:49:43',
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Advaita',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:43',
                'updated_at' => '2018-11-14 20:49:43',
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Neo-Advaita',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:43',
                'updated_at' => '2018-11-14 20:49:43',
            ),
            131 => 
            array (
                'id' => 632,
                'name' => '19th-century Indian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:44',
                'updated_at' => '2018-11-14 20:49:44',
            ),
            132 => 
            array (
                'id' => 633,
                'name' => '19th-century Indian educational theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:44',
                'updated_at' => '2018-11-14 20:49:44',
            ),
            133 => 
            array (
                'id' => 634,
                'name' => '20th-century Indian educational theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:45',
                'updated_at' => '2018-11-14 20:49:45',
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'Indian political philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:46',
                'updated_at' => '2018-11-14 20:49:46',
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Urdu theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:47',
                'updated_at' => '2018-11-14 20:49:47',
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'Spalding Professors of Eastern Religion and Ethics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:49',
                'updated_at' => '2018-11-14 20:49:49',
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Bangladeshi philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:50',
                'updated_at' => '2018-11-14 20:49:50',
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Former Theosophists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:52',
                'updated_at' => '2018-11-14 20:49:52',
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'Indian political theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:54',
                'updated_at' => '2018-11-14 20:49:54',
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Japanese philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:55',
                'updated_at' => '2018-11-14 20:49:55',
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Japanese Theosophists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:57',
                'updated_at' => '2018-11-14 20:49:57',
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Buddhist existentialists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:58',
                'updated_at' => '2018-11-14 20:49:58',
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Japanese ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:58',
                'updated_at' => '2018-11-14 20:49:58',
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'Korean philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:00',
                'updated_at' => '2018-11-14 20:50:00',
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'South Korean philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Quaker philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Tibetan philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Nepalese philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Ancient Greek philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:04',
                'updated_at' => '2018-11-14 20:50:04',
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'Pythagoreans of Magna Graecia',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:05',
                'updated_at' => '2018-11-14 20:50:05',
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Women philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:06',
                'updated_at' => '2018-11-14 20:50:06',
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Megarian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            153 => 
            array (
                'id' => 654,
                'name' => '4th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Coptic Orthodox saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'Egyptian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'Egyptian Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Late Ancient Christian female saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Saints from Roman Egypt',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'Ancient Greek philosophers of art',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:08',
                'updated_at' => '2018-11-14 20:50:08',
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'Chinese philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:09',
                'updated_at' => '2018-11-14 20:50:09',
            ),
            161 => 
            array (
                'id' => 662,
                'name' => '14th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:12',
                'updated_at' => '2018-11-14 20:50:12',
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'Female saints of medieval Italy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:12',
                'updated_at' => '2018-11-14 20:50:12',
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Female saints of medieval Germany',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:13',
                'updated_at' => '2018-11-14 20:50:13',
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Medieval German saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:13',
                'updated_at' => '2018-11-14 20:50:13',
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'English educational theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:14',
                'updated_at' => '2018-11-14 20:50:14',
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'British feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:14',
                'updated_at' => '2018-11-14 20:50:14',
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'American Theosophists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:15',
                'updated_at' => '2018-11-14 20:50:15',
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Congregationalist feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:15',
                'updated_at' => '2018-11-14 20:50:15',
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'Unitarian feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:16',
                'updated_at' => '2018-11-14 20:50:16',
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Austrian feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:18',
                'updated_at' => '2018-11-14 20:50:18',
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Mexican philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:19',
                'updated_at' => '2018-11-14 20:50:19',
            ),
            172 => 
            array (
                'id' => 673,
                'name' => '20th-century Christian saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            173 => 
            array (
                'id' => 674,
                'name' => '20th-century German Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Carmelite mystics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Carmelite saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Catholic saints and blesseds of the Nazi era',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Philosophers from Rhode Island',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:21',
                'updated_at' => '2018-11-14 20:50:21',
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'American Episcopal theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:22',
                'updated_at' => '2018-11-14 20:50:22',
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'Christian feminist theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:22',
                'updated_at' => '2018-11-14 20:50:22',
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'Presidents of the Society for Medieval and Renaissance Philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'Princeton Theological Seminary alumni',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'Scholars of medieval philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'Anglican feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'Philosophers from New Hampshire',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:26',
                'updated_at' => '2018-11-14 20:50:26',
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Philosophers from Florida',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:26',
                'updated_at' => '2018-11-14 20:50:26',
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Philosophers from Wisconsin',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:27',
                'updated_at' => '2018-11-14 20:50:27',
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Philosophers from Arizona',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:27',
                'updated_at' => '2018-11-14 20:50:27',
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'New Zealand philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:32',
                'updated_at' => '2018-11-14 20:50:32',
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Turkish philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:35',
                'updated_at' => '2018-11-14 20:50:35',
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'Norwegian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:39',
                'updated_at' => '2018-11-14 20:50:39',
            ),
            191 => 
            array (
                'id' => 692,
            'name' => 'Philosophers from Washington (state)',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:44',
                'updated_at' => '2018-11-14 20:50:44',
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Ecofeminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:46',
                'updated_at' => '2018-11-14 20:50:46',
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'French philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:47',
                'updated_at' => '2018-11-14 20:50:47',
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Scholars of contemporary philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:47',
                'updated_at' => '2018-11-14 20:50:47',
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'Australian feminist writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:47',
                'updated_at' => '2018-11-14 20:50:47',
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Radical feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:52',
                'updated_at' => '2018-11-14 20:50:52',
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Africana philosophy',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:55',
                'updated_at' => '2018-11-14 20:50:55',
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Existentialism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:57',
                'updated_at' => '2018-11-14 20:50:57',
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Philosophers from Hawaii',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:58',
                'updated_at' => '2018-11-14 20:50:58',
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'Philosophers from Colorado',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:59',
                'updated_at' => '2018-11-14 20:50:59',
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Swiss philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:03',
                'updated_at' => '2018-11-14 20:51:03',
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Philosophy of physics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:08',
                'updated_at' => '2018-11-14 20:51:08',
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Canadian logicians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:09',
                'updated_at' => '2018-11-14 20:51:09',
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Bulgarian literary theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Bulgarian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Bulgarian feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Bulgarian semioticians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Environmental ethics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:26',
                'updated_at' => '2018-11-14 20:51:26',
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'American Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:27',
                'updated_at' => '2018-11-14 20:51:27',
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Graduate Theological Union alumni',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:27',
                'updated_at' => '2018-11-14 20:51:27',
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Fuller Theological Seminary faculty',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:27',
                'updated_at' => '2018-11-14 20:51:27',
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Women Christian theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:28',
                'updated_at' => '2018-11-14 20:51:28',
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'Philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:31',
                'updated_at' => '2018-11-14 20:51:31',
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Feminist ethics',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:32',
                'updated_at' => '2018-11-14 20:51:32',
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Ecotheology',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            216 => 
            array (
                'id' => 717,
                'name' => '20th-century American Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            217 => 
            array (
                'id' => 718,
                'name' => '21st-century American Roman Catholic theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Roman Catholic feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'Liberation theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'American literary theorists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:38',
                'updated_at' => '2018-11-14 20:51:38',
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Literary critics of German',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:38',
                'updated_at' => '2018-11-14 20:51:38',
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Philosophy of law',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:42',
                'updated_at' => '2018-11-14 20:51:42',
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Hindu feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:43',
                'updated_at' => '2018-11-14 20:51:43',
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Indian feminist writers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:43',
                'updated_at' => '2018-11-14 20:51:43',
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Canadian feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:44',
                'updated_at' => '2018-11-14 20:51:44',
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Medical ethicists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:45',
                'updated_at' => '2018-11-14 20:51:45',
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'German feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:46',
                'updated_at' => '2018-11-14 20:51:46',
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'Philosophers from Tennessee',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:47',
                'updated_at' => '2018-11-14 20:51:47',
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:54',
                'updated_at' => '2018-11-14 20:51:54',
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Feminist historians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:54',
                'updated_at' => '2018-11-14 20:51:54',
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'Brazilian philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:08',
                'updated_at' => '2018-11-14 20:53:08',
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Modern philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:08',
                'updated_at' => '2018-11-14 20:53:08',
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'LGBT feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:09',
                'updated_at' => '2018-11-14 20:53:09',
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Women cognitive scientists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:10',
                'updated_at' => '2018-11-14 20:53:10',
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Danish Protestant theologians',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:12',
                'updated_at' => '2018-11-14 20:53:12',
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Republic of Venice philosophers',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:18',
                'updated_at' => '2018-11-14 20:53:18',
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'Spanish Roman Catholic saints',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:21',
                'updated_at' => '2018-11-14 20:53:21',
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Christian female saints of the Early Modern era',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:22',
                'updated_at' => '2018-11-14 20:53:22',
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Scottish feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:23',
                'updated_at' => '2018-11-14 20:53:23',
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Critics of creationism',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:24',
                'updated_at' => '2018-11-14 20:53:24',
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Sex-positive feminists',
                'type' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 22:43:13',
                'updated_at' => '2018-11-14 22:43:13',
            ),
        ));
        
        
    }
}