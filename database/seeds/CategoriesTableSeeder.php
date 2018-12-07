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
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ancient Greek metaphysicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Philosophers of ancient Ionia',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Presocratic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:29',
                'updated_at' => '2018-11-14 20:40:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Metaphysics writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:30',
                'updated_at' => '2018-11-14 20:40:30',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mythological cosmologies',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:30',
                'updated_at' => '2018-11-14 20:40:30',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Natural philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:30',
                'updated_at' => '2018-11-14 20:40:30',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Pythagoreans',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:31',
                'updated_at' => '2018-11-14 20:40:31',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Ancient Greek music theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:31',
                'updated_at' => '2018-11-14 20:40:31',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:31',
                'updated_at' => '2018-11-14 20:40:31',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Philosophy of mathematics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Philosophy of music',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ancient Greek epistemologists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Greek theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Deist philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:32',
                'updated_at' => '2018-11-14 20:40:32',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '5th-century BC philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:33',
                'updated_at' => '2018-11-14 20:40:33',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Ontologists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:33',
                'updated_at' => '2018-11-14 20:40:33',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Eleatic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Philosophers of Magna Graecia',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Pluralist philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Metic philosophers in Classical Athens',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:34',
                'updated_at' => '2018-11-14 20:40:34',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Philosophers of science',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:35',
                'updated_at' => '2018-11-14 20:40:35',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Metaphysicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:35',
                'updated_at' => '2018-11-14 20:40:35',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Sophists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Philosophers of nihilism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Nihilists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ancient Athenian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Ancient Greek ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:36',
                'updated_at' => '2018-11-14 20:40:36',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Epistemologists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Executed philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Irony theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Critics of religions',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Ancient Greek atomist philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:37',
                'updated_at' => '2018-11-14 20:40:37',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Atheist philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:39',
                'updated_at' => '2018-11-14 20:40:39',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '4th-century BC philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:39',
                'updated_at' => '2018-11-14 20:40:39',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Cynic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:39',
                'updated_at' => '2018-11-14 20:40:39',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Cyrenaic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:40',
                'updated_at' => '2018-11-14 20:40:40',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Academic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:40',
                'updated_at' => '2018-11-14 20:40:40',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Ancient Greek metaphilosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Ancient Greek political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Philosophers of education',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Philosophers of language',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Philosophers of law',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:41',
                'updated_at' => '2018-11-14 20:40:41',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Moral realists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:42',
                'updated_at' => '2018-11-14 20:40:42',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Classical Greek philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:42',
                'updated_at' => '2018-11-14 20:40:42',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Philosophers and tutors of Alexander the Great',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:43',
                'updated_at' => '2018-11-14 20:40:43',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Acting theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:43',
                'updated_at' => '2018-11-14 20:40:43',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Ancient Greek logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:44',
                'updated_at' => '2018-11-14 20:40:44',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Ancient Greek philosophers of language',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:44',
                'updated_at' => '2018-11-14 20:40:44',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Ancient Greek philosophers of mind',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:44',
                'updated_at' => '2018-11-14 20:40:44',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Peripatetic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Philosophers of ancient Chalcidice',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Philosophers of technology',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:45',
                'updated_at' => '2018-11-14 20:40:45',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Rhetoric theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:46',
                'updated_at' => '2018-11-14 20:40:46',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Trope theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:46',
                'updated_at' => '2018-11-14 20:40:46',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Virtue ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:46',
                'updated_at' => '2018-11-14 20:40:46',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Ancient Skeptic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Hellenistic-era philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Indo-Greek religions and philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => '3rd-century BC philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Hellenistic-era philosophers in Athens',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:47',
                'updated_at' => '2018-11-14 20:40:47',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Epicurean philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:48',
                'updated_at' => '2018-11-14 20:40:48',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Materialists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:48',
                'updated_at' => '2018-11-14 20:40:48',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Stoic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:49',
                'updated_at' => '2018-11-14 20:40:49',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Hellenistic-era philosophers from Anatolia',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:50',
                'updated_at' => '2018-11-14 20:40:50',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => '2nd-century BC philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:50',
                'updated_at' => '2018-11-14 20:40:50',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => '1st-century BC philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Roman-era Epicurean philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Roman-era philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Ancient Roman political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Philosophers of Roman Italy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Murdered philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:51',
                'updated_at' => '2018-11-14 20:40:51',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Jewish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => '1st-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Philosophers who committed suicide',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Roman-era Stoic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Spanish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:52',
                'updated_at' => '2018-11-14 20:40:52',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => '2nd-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:53',
                'updated_at' => '2018-11-14 20:40:53',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Stoicism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:53',
                'updated_at' => '2018-11-14 20:40:53',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Roman-era Skeptic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Roman-era philosophers in Rome',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Roman-era philosophers in Athens',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Roman-era philosophers in Alexandria',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => '3rd-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Egyptian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Classical mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Critics of atheism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:54',
                'updated_at' => '2018-11-14 20:40:54',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => '4th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Neo-Pythagoreans',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Syrian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => '4th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => '4th-century Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => '5th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:55',
                'updated_at' => '2018-11-14 20:40:55',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => '5th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => '5th-century Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => '5th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'African philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Ancient Roman saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Berber Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Christian ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Christian existentialists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Christian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Existentialist theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Music theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:56',
                'updated_at' => '2018-11-14 20:40:56',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Numidian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            106 => 
            array (
                'id' => 107,
            'name' => 'Saints from Roman Africa (province)',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Systematic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Ancient Roman Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Philosophers of mathematics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => '6th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => '6th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:57',
                'updated_at' => '2018-11-14 20:40:57',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Roman Catholic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => '6th-century Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Byzantine philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:58',
                'updated_at' => '2018-11-14 20:40:58',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => '9th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Musical theorists of medieval Islam',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Medieval Arab philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Islamic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => '9th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => '9th-century Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Irish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Irish Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Medieval philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:40:59',
                'updated_at' => '2018-11-14 20:40:59',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Roman Catholic mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Scholastic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => '10th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Medieval Jewish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Philosophers of Judaism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:00',
                'updated_at' => '2018-11-14 20:41:00',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Persian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:01',
                'updated_at' => '2018-11-14 20:41:01',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Medieval Persian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:01',
                'updated_at' => '2018-11-14 20:41:01',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Aristotelian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:01',
                'updated_at' => '2018-11-14 20:41:01',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:02',
                'updated_at' => '2018-11-14 20:41:02',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => '11th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:02',
                'updated_at' => '2018-11-14 20:41:02',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => '12th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:03',
                'updated_at' => '2018-11-14 20:41:03',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => '11th-century Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:03',
                'updated_at' => '2018-11-14 20:41:03',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => '12th-century Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:03',
                'updated_at' => '2018-11-14 20:41:03',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => '11th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => '12th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Benedictine philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Benedictine saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Benedictine theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:04',
                'updated_at' => '2018-11-14 20:41:04',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Pre-Reformation saints of the Lutheran liturgical calendar',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Medieval English theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Medieval French theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'English Roman Catholic saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'French Roman Catholic saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Burgundian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:05',
                'updated_at' => '2018-11-14 20:41:05',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Pre-Reformation Anglican saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:06',
                'updated_at' => '2018-11-14 20:41:06',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Benedictine mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:06',
                'updated_at' => '2018-11-14 20:41:06',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'French logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:07',
                'updated_at' => '2018-11-14 20:41:07',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Italian Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:07',
                'updated_at' => '2018-11-14 20:41:07',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Medieval Italian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:07',
                'updated_at' => '2018-11-14 20:41:07',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => '12th-century Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => '13th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => '12th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => '13th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => '13th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Franciscan mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:10',
                'updated_at' => '2018-11-14 20:41:10',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Franciscan saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Italian Roman Catholic saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Medieval Italian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'English philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:11',
                'updated_at' => '2018-11-14 20:41:11',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => '13th-century Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:12',
                'updated_at' => '2018-11-14 20:41:12',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'German music theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'German philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'German Roman Catholic saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Medieval German theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:13',
                'updated_at' => '2018-11-14 20:41:13',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Dominican mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:14',
                'updated_at' => '2018-11-14 20:41:14',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Dominican saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:14',
                'updated_at' => '2018-11-14 20:41:14',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Incorrupt saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:14',
                'updated_at' => '2018-11-14 20:41:14',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Alsatian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:15',
                'updated_at' => '2018-11-14 20:41:15',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'English music theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:15',
                'updated_at' => '2018-11-14 20:41:15',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Critics of Islam',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:16',
                'updated_at' => '2018-11-14 20:41:16',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Italian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:16',
                'updated_at' => '2018-11-14 20:41:16',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Italian Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:17',
                'updated_at' => '2018-11-14 20:41:17',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Roman Catholic moral theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:19',
                'updated_at' => '2018-11-14 20:41:19',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Dominican theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:19',
                'updated_at' => '2018-11-14 20:41:19',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Franciscan theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:20',
                'updated_at' => '2018-11-14 20:41:20',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Belgian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:20',
                'updated_at' => '2018-11-14 20:41:20',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Dutch philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:20',
                'updated_at' => '2018-11-14 20:41:20',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => '14th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:21',
                'updated_at' => '2018-11-14 20:41:21',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => '14th-century Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:21',
                'updated_at' => '2018-11-14 20:41:21',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => '14th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:21',
                'updated_at' => '2018-11-14 20:41:21',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'German Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:22',
                'updated_at' => '2018-11-14 20:41:22',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Rhineland mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:22',
                'updated_at' => '2018-11-14 20:41:22',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Scottish logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:23',
                'updated_at' => '2018-11-14 20:41:23',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Scottish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:25',
                'updated_at' => '2018-11-14 20:41:25',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'English logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:26',
                'updated_at' => '2018-11-14 20:41:26',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'English Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:27',
                'updated_at' => '2018-11-14 20:41:27',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => '14th-century Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:27',
                'updated_at' => '2018-11-14 20:41:27',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'French philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:28',
                'updated_at' => '2018-11-14 20:41:28',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Critics of the Catholic Church',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:29',
                'updated_at' => '2018-11-14 20:41:29',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Catalan philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:30',
                'updated_at' => '2018-11-14 20:41:30',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Christianity and Hellenistic philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:30',
                'updated_at' => '2018-11-14 20:41:30',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => '15th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:30',
                'updated_at' => '2018-11-14 20:41:30',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => '15th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:31',
                'updated_at' => '2018-11-14 20:41:31',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => '15th-century Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:31',
                'updated_at' => '2018-11-14 20:41:31',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Perennial philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:32',
                'updated_at' => '2018-11-14 20:41:32',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Dutch Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:33',
                'updated_at' => '2018-11-14 20:41:33',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Early Modern philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:34',
                'updated_at' => '2018-11-14 20:41:34',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Italian political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:34',
                'updated_at' => '2018-11-14 20:41:34',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Military theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:34',
                'updated_at' => '2018-11-14 20:41:34',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => '16th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Critics of multiculturalism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => '16th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Anglican saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'English saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:35',
                'updated_at' => '2018-11-14 20:41:35',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => '16th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:36',
                'updated_at' => '2018-11-14 20:41:36',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => '16th-century German Protestant theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:36',
                'updated_at' => '2018-11-14 20:41:36',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Burials at All Saints\' Church, Wittenberg',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:36',
                'updated_at' => '2018-11-14 20:41:36',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'German Lutheran theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:37',
                'updated_at' => '2018-11-14 20:41:37',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Protestant mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:38',
                'updated_at' => '2018-11-14 20:41:38',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Calvinist and Reformed philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:39',
                'updated_at' => '2018-11-14 20:41:39',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Theologians from the Republic of Geneva',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:39',
                'updated_at' => '2018-11-14 20:41:39',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => '16th-century Calvinist and Reformed theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:40',
                'updated_at' => '2018-11-14 20:41:40',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => '16th-century French theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:40',
                'updated_at' => '2018-11-14 20:41:40',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'French Calvinist and Reformed theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:41',
                'updated_at' => '2018-11-14 20:41:41',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => '16th-century French philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:41',
                'updated_at' => '2018-11-14 20:41:41',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => '16th-century French Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:42',
                'updated_at' => '2018-11-14 20:41:42',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Atomists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:43',
                'updated_at' => '2018-11-14 20:41:43',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => '17th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:44',
                'updated_at' => '2018-11-14 20:41:44',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Jesuit philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:44',
                'updated_at' => '2018-11-14 20:41:44',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Spanish Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:46',
                'updated_at' => '2018-11-14 20:41:46',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => '17th-century Calvinist and Reformed theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:49',
                'updated_at' => '2018-11-14 20:41:49',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => '17th-century Dutch philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Dutch Calvinist and Reformed theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Dutch political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => '17th-century Dutch political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:50',
                'updated_at' => '2018-11-14 20:41:50',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:51',
                'updated_at' => '2018-11-14 20:41:51',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Philosophy and thought in the Dutch Republic',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:51',
                'updated_at' => '2018-11-14 20:41:51',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => '17th-century Dutch theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:51',
                'updated_at' => '2018-11-14 20:41:51',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Number theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'French music theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'English political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => '17th-century French Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:52',
                'updated_at' => '2018-11-14 20:41:52',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Consciousness researchers and theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:53',
                'updated_at' => '2018-11-14 20:41:53',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Critics of animal rights',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:53',
                'updated_at' => '2018-11-14 20:41:53',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Enlightenment philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:53',
                'updated_at' => '2018-11-14 20:41:53',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => '17th-century French philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:54',
                'updated_at' => '2018-11-14 20:41:54',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Philosophers of mind',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:54',
                'updated_at' => '2018-11-14 20:41:54',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'English political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:56',
                'updated_at' => '2018-11-14 20:41:56',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => '17th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:41:58',
                'updated_at' => '2018-11-14 20:41:58',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => '17th-century English philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => '17th-century English theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Anglican philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'English Anglican theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:00',
                'updated_at' => '2018-11-14 20:42:00',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => '17th-century French theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:01',
                'updated_at' => '2018-11-14 20:42:01',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Probability theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:01',
                'updated_at' => '2018-11-14 20:42:01',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Flemish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:02',
                'updated_at' => '2018-11-14 20:42:02',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => '17th-century Irish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:04',
                'updated_at' => '2018-11-14 20:42:04',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => '17th-century Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:06',
                'updated_at' => '2018-11-14 20:42:06',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Critics of Judaism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:06',
                'updated_at' => '2018-11-14 20:42:06',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => '18th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:12',
                'updated_at' => '2018-11-14 20:42:12',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => '18th-century French philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:13',
                'updated_at' => '2018-11-14 20:42:13',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => '18th-century Dutch philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:13',
                'updated_at' => '2018-11-14 20:42:13',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Protestant philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:13',
                'updated_at' => '2018-11-14 20:42:13',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'English feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:14',
                'updated_at' => '2018-11-14 20:42:14',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Feminist philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:14',
                'updated_at' => '2018-11-14 20:42:14',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Moral philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:14',
                'updated_at' => '2018-11-14 20:42:14',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'English theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:15',
                'updated_at' => '2018-11-14 20:42:15',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Feminist theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:15',
                'updated_at' => '2018-11-14 20:42:15',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => '18th-century Irish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:15',
                'updated_at' => '2018-11-14 20:42:15',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => '18th-century German philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:16',
                'updated_at' => '2018-11-14 20:42:16',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => '17th-century German philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:16',
                'updated_at' => '2018-11-14 20:42:16',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'German logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:16',
                'updated_at' => '2018-11-14 20:42:16',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'German political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:17',
                'updated_at' => '2018-11-14 20:42:17',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'French materialists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:18',
                'updated_at' => '2018-11-14 20:42:18',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Social philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:19',
                'updated_at' => '2018-11-14 20:42:19',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => '18th-century British philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:20',
                'updated_at' => '2018-11-14 20:42:20',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Irish natural philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:22',
                'updated_at' => '2018-11-14 20:42:22',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Philosophers of history',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:23',
                'updated_at' => '2018-11-14 20:42:23',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => '18th-century Anglican theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:23',
                'updated_at' => '2018-11-14 20:42:23',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Critics of deism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:24',
                'updated_at' => '2018-11-14 20:42:24',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Philosophers of psychology',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:26',
                'updated_at' => '2018-11-14 20:42:26',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Philosophers of sexuality',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:27',
                'updated_at' => '2018-11-14 20:42:27',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'British Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:28',
                'updated_at' => '2018-11-14 20:42:28',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Philosophers of art',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:29',
                'updated_at' => '2018-11-14 20:42:29',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Philosophers of religion',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:29',
                'updated_at' => '2018-11-14 20:42:29',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Philosophers from the Republic of Geneva',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:30',
                'updated_at' => '2018-11-14 20:42:30',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:30',
                'updated_at' => '2018-11-14 20:42:30',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'French ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:32',
                'updated_at' => '2018-11-14 20:42:32',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Scottish business theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:34',
                'updated_at' => '2018-11-14 20:42:34',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Welsh philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:34',
                'updated_at' => '2018-11-14 20:42:34',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Continental philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:35',
                'updated_at' => '2018-11-14 20:42:35',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Kantian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:35',
                'updated_at' => '2018-11-14 20:42:35',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => '18th-century German Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:36',
                'updated_at' => '2018-11-14 20:42:36',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => '18th-century German Protestant theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Irish political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'British political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'British political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:37',
                'updated_at' => '2018-11-14 20:42:37',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'American political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:38',
                'updated_at' => '2018-11-14 20:42:38',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Philosophers from Virginia',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:38',
                'updated_at' => '2018-11-14 20:42:38',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => '18th-century American philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => '19th-century American philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => '19th-century British philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'British ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:39',
                'updated_at' => '2018-11-14 20:42:39',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Social philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:40',
                'updated_at' => '2018-11-14 20:42:40',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'English feminist writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:41',
                'updated_at' => '2018-11-14 20:42:41',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Feminist theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Feminist writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'German literary theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => '19th-century German philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:42',
                'updated_at' => '2018-11-14 20:42:42',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => '19th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:43',
                'updated_at' => '2018-11-14 20:42:43',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'French political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:43',
                'updated_at' => '2018-11-14 20:42:43',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Knights of the Order of Saints Maurice and Lazarus',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:44',
                'updated_at' => '2018-11-14 20:42:44',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => '19th-century German Protestant theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:44',
                'updated_at' => '2018-11-14 20:42:44',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Christian Universalist theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:45',
                'updated_at' => '2018-11-14 20:42:45',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Death of God theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:46',
                'updated_at' => '2018-11-14 20:42:46',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'German historians of philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:46',
                'updated_at' => '2018-11-14 20:42:46',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Hegelian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:46',
                'updated_at' => '2018-11-14 20:42:46',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Scottish political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:47',
                'updated_at' => '2018-11-14 20:42:47',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Lutheran philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:48',
                'updated_at' => '2018-11-14 20:42:48',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Czech philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:48',
                'updated_at' => '2018-11-14 20:42:48',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Mathematical logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:48',
                'updated_at' => '2018-11-14 20:42:48',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Presidents of the Geological Society of London',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:50',
                'updated_at' => '2018-11-14 20:42:50',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Philosophers of social science',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:50',
                'updated_at' => '2018-11-14 20:42:50',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Structural functionalism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:50',
                'updated_at' => '2018-11-14 20:42:50',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => '19th-century theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:51',
                'updated_at' => '2018-11-14 20:42:51',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Philosophers from Massachusetts',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:51',
                'updated_at' => '2018-11-14 20:42:51',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'French political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:52',
                'updated_at' => '2018-11-14 20:42:52',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Critics of work and the work ethic',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:52',
                'updated_at' => '2018-11-14 20:42:52',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => '19th-century English philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:53',
                'updated_at' => '2018-11-14 20:42:53',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Feminist economists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Individualist feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Male feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Voting theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:54',
                'updated_at' => '2018-11-14 20:42:54',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Anarchist theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Fellows of the Royal Entomological Society',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Fellows of the Zoological Society of London',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Human evolution theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:55',
                'updated_at' => '2018-11-14 20:42:55',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'American feminist writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:56',
                'updated_at' => '2018-11-14 20:42:56',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => '19th-century Protestant theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:56',
                'updated_at' => '2018-11-14 20:42:56',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Danish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:57',
                'updated_at' => '2018-11-14 20:42:57',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Ecological succession',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:57',
                'updated_at' => '2018-11-14 20:42:57',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => '19th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:58',
                'updated_at' => '2018-11-14 20:42:58',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'African-American feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:58',
                'updated_at' => '2018-11-14 20:42:58',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'American feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:58',
                'updated_at' => '2018-11-14 20:42:58',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Christian female saints of the Late Modern era',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Methodist feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Russian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Revolution theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:42:59',
                'updated_at' => '2018-11-14 20:42:59',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Critics of Marxism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:00',
                'updated_at' => '2018-11-14 20:43:00',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Christian feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:00',
                'updated_at' => '2018-11-14 20:43:00',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Marxist theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:01',
                'updated_at' => '2018-11-14 20:43:01',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Philosophers of economics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:01',
                'updated_at' => '2018-11-14 20:43:01',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'German political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:02',
                'updated_at' => '2018-11-14 20:43:02',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Urban theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:02',
                'updated_at' => '2018-11-14 20:43:02',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Libertarian theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:03',
                'updated_at' => '2018-11-14 20:43:03',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Quaker feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:04',
                'updated_at' => '2018-11-14 20:43:04',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'White\'s Professors of Moral Philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:05',
                'updated_at' => '2018-11-14 20:43:05',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Cambridge University Moral Sciences Club',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:05',
                'updated_at' => '2018-11-14 20:43:05',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => '20th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:06',
                'updated_at' => '2018-11-14 20:43:06',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Austrian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:06',
                'updated_at' => '2018-11-14 20:43:06',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => '20th-century American philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:07',
                'updated_at' => '2018-11-14 20:43:07',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'American logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:07',
                'updated_at' => '2018-11-14 20:43:07',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Critical theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:07',
                'updated_at' => '2018-11-14 20:43:07',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'American semioticians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Lattice theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Modal logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Philosophers from Pennsylvania',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:08',
                'updated_at' => '2018-11-14 20:43:08',
            ),
            363 => 
            array (
                'id' => 364,
            'name' => 'Philosophers from New York (state)',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:09',
                'updated_at' => '2018-11-14 20:43:09',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Presidents of the American Psychological Association',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:09',
                'updated_at' => '2018-11-14 20:43:09',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Atheist existentialists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:10',
                'updated_at' => '2018-11-14 20:43:10',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Critics of Christianity',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:10',
                'updated_at' => '2018-11-14 20:43:10',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Existentialists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:10',
                'updated_at' => '2018-11-14 20:43:10',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Relativity theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:11',
                'updated_at' => '2018-11-14 20:43:11',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'British philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:11',
                'updated_at' => '2018-11-14 20:43:11',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Analytic philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:12',
                'updated_at' => '2018-11-14 20:43:12',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Set theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:13',
                'updated_at' => '2018-11-14 20:43:13',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Wykeham Professors of Logic',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:13',
                'updated_at' => '2018-11-14 20:43:13',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => '20th-century French philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:14',
                'updated_at' => '2018-11-14 20:43:14',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Chaos theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Dynamical systems theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Philosophers from California',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Semioticians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:15',
                'updated_at' => '2018-11-14 20:43:15',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Structuralists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:16',
                'updated_at' => '2018-11-14 20:43:16',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => '19th-century French philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:16',
                'updated_at' => '2018-11-14 20:43:16',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => '20th-century Italian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:16',
                'updated_at' => '2018-11-14 20:43:16',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => '20th-century German philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:17',
                'updated_at' => '2018-11-14 20:43:17',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => '19th-century educational theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:17',
                'updated_at' => '2018-11-14 20:43:17',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => '20th-century educational theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:17',
                'updated_at' => '2018-11-14 20:43:17',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Australian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:18',
                'updated_at' => '2018-11-14 20:43:18',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Process theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Members of the Académie des sciences morales et politiques',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Process philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'American educational theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:19',
                'updated_at' => '2018-11-14 20:43:19',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'American political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:20',
                'updated_at' => '2018-11-14 20:43:20',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Philosophy of education',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:20',
                'updated_at' => '2018-11-14 20:43:20',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Philosophers from Illinois',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:20',
                'updated_at' => '2018-11-14 20:43:20',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => '20th-century English theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:21',
                'updated_at' => '2018-11-14 20:43:21',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'American theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:22',
                'updated_at' => '2018-11-14 20:43:22',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Rationality theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:23',
                'updated_at' => '2018-11-14 20:43:23',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Basque philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:23',
                'updated_at' => '2018-11-14 20:43:23',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Philosophy of time',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:24',
                'updated_at' => '2018-11-14 20:43:24',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'American philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:24',
                'updated_at' => '2018-11-14 20:43:24',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Anarcha-feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:24',
                'updated_at' => '2018-11-14 20:43:24',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Atheist feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:25',
                'updated_at' => '2018-11-14 20:43:25',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Jewish feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:25',
                'updated_at' => '2018-11-14 20:43:25',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Socialist feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:25',
                'updated_at' => '2018-11-14 20:43:25',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Israel Prize in humanities recipients who were philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Relational ethics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Austrian Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Israeli philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Jewish existentialists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:27',
                'updated_at' => '2018-11-14 20:43:27',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:28',
                'updated_at' => '2018-11-14 20:43:28',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => '20th-century Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:28',
                'updated_at' => '2018-11-14 20:43:28',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => '19th-century Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:28',
                'updated_at' => '2018-11-14 20:43:28',
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'British historians of philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:29',
                'updated_at' => '2018-11-14 20:43:29',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'British logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:30',
                'updated_at' => '2018-11-14 20:43:30',
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'John F. Kennedy conspiracy theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:30',
                'updated_at' => '2018-11-14 20:43:30',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => '19th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => '20th-century Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Eastern Orthodox mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Eastern Orthodox philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Russian Christian mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:31',
                'updated_at' => '2018-11-14 20:43:31',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'German semioticians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:32',
                'updated_at' => '2018-11-14 20:43:32',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'British scholars of ancient Greek philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:33',
                'updated_at' => '2018-11-14 20:43:33',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => '20th-century French Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:33',
                'updated_at' => '2018-11-14 20:43:33',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'French paleontologists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:34',
                'updated_at' => '2018-11-14 20:43:34',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Jesuit theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:34',
                'updated_at' => '2018-11-14 20:43:34',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Logical positivism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:35',
                'updated_at' => '2018-11-14 20:43:35',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Vienna Circle',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:35',
                'updated_at' => '2018-11-14 20:43:35',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Philosophy of biology',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:37',
                'updated_at' => '2018-11-14 20:43:37',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Thomist philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:37',
                'updated_at' => '2018-11-14 20:43:37',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'American philosophy academics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:38',
                'updated_at' => '2018-11-14 20:43:38',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Philosophy teachers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:39',
                'updated_at' => '2018-11-14 20:43:39',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Hungarian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:39',
                'updated_at' => '2018-11-14 20:43:39',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Literary theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:40',
                'updated_at' => '2018-11-14 20:43:40',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Philosophy academics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:40',
                'updated_at' => '2018-11-14 20:43:40',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Christian socialist theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:41',
                'updated_at' => '2018-11-14 20:43:41',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'English historians of philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:41',
                'updated_at' => '2018-11-14 20:43:41',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Austrian logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:42',
                'updated_at' => '2018-11-14 20:43:42',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Ordinary language philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:42',
                'updated_at' => '2018-11-14 20:43:42',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Wittgensteinian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:43',
                'updated_at' => '2018-11-14 20:43:43',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Enactive cognition',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:44',
                'updated_at' => '2018-11-14 20:43:44',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'UCLA Philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:47',
                'updated_at' => '2018-11-14 20:43:47',
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Philosophy of logic',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:47',
                'updated_at' => '2018-11-14 20:43:47',
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Philosophers from Michigan',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:48',
                'updated_at' => '2018-11-14 20:43:48',
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Philosophers from Montana',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:49',
                'updated_at' => '2018-11-14 20:43:49',
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Philosophers from Ohio',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:49',
                'updated_at' => '2018-11-14 20:43:49',
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Polish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:49',
                'updated_at' => '2018-11-14 20:43:49',
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Philosophers from Connecticut',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:50',
                'updated_at' => '2018-11-14 20:43:50',
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'American historians of philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:53',
                'updated_at' => '2018-11-14 20:43:53',
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'American Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:53',
                'updated_at' => '2018-11-14 20:43:53',
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'German Jewish theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:55',
                'updated_at' => '2018-11-14 20:43:55',
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'German scholars of ancient Greek philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:55',
                'updated_at' => '2018-11-14 20:43:55',
            ),
            449 => 
            array (
                'id' => 450,
                'name' => '20th-century British philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:57',
                'updated_at' => '2018-11-14 20:43:57',
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Waynflete Professors of Metaphysical Philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:43:58',
                'updated_at' => '2018-11-14 20:43:58',
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Poststructuralists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:00',
                'updated_at' => '2018-11-14 20:44:00',
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'French semioticians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:00',
                'updated_at' => '2018-11-14 20:44:00',
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Computability theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:00',
                'updated_at' => '2018-11-14 20:44:00',
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Polish logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:01',
                'updated_at' => '2018-11-14 20:44:01',
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Model theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:44:01',
                'updated_at' => '2018-11-14 20:44:01',
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Kyoto laureates in Arts and Philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:47:58',
                'updated_at' => '2018-11-14 20:47:58',
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'American ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:47:59',
                'updated_at' => '2018-11-14 20:47:59',
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Female critics of feminism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:04',
                'updated_at' => '2018-11-14 20:48:04',
            ),
            459 => 
            array (
                'id' => 460,
                'name' => '20th-century Russian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:05',
                'updated_at' => '2018-11-14 20:48:05',
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Lithuanian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:05',
                'updated_at' => '2018-11-14 20:48:05',
            ),
            461 => 
            array (
                'id' => 462,
                'name' => '20th-century French theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:06',
                'updated_at' => '2018-11-14 20:48:06',
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Contemporary philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:06',
                'updated_at' => '2018-11-14 20:48:06',
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Bisexual feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:09',
                'updated_at' => '2018-11-14 20:48:09',
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Feminist studies scholars',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'French feminist writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'French feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Marxist feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:10',
                'updated_at' => '2018-11-14 20:48:10',
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Action theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:14',
                'updated_at' => '2018-11-14 20:48:14',
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Canadian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:14',
                'updated_at' => '2018-11-14 20:48:14',
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Communication theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:14',
                'updated_at' => '2018-11-14 20:48:14',
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Literacy and society theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Literary critics of English',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Media theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Theorists on Western civilization',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:15',
                'updated_at' => '2018-11-14 20:48:15',
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Presidents of the Metaphysical Society of America',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:16',
                'updated_at' => '2018-11-14 20:48:16',
            ),
            476 => 
            array (
                'id' => 477,
                'name' => '21st-century French philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:17',
                'updated_at' => '2018-11-14 20:48:17',
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'French literary theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:17',
                'updated_at' => '2018-11-14 20:48:17',
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Metaphor theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:17',
                'updated_at' => '2018-11-14 20:48:17',
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Stanford University Department of Philosophy faculty',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:19',
                'updated_at' => '2018-11-14 20:48:19',
            ),
            480 => 
            array (
                'id' => 481,
                'name' => '21st-century American philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:21',
                'updated_at' => '2018-11-14 20:48:21',
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Deontological ethics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:22',
                'updated_at' => '2018-11-14 20:48:22',
            ),
            482 => 
            array (
                'id' => 483,
                'name' => '21st-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:22',
                'updated_at' => '2018-11-14 20:48:22',
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Critics of postmodernism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:23',
                'updated_at' => '2018-11-14 20:48:23',
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Martiniquais philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:23',
                'updated_at' => '2018-11-14 20:48:23',
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'French historians of philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:24',
                'updated_at' => '2018-11-14 20:48:24',
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Philosophy articles needing expert attention',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:25',
                'updated_at' => '2018-11-14 20:48:25',
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Structuralism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:26',
                'updated_at' => '2018-11-14 20:48:26',
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Mennonite theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:27',
                'updated_at' => '2018-11-14 20:48:27',
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Cognitive scientists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:28',
                'updated_at' => '2018-11-14 20:48:28',
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Critics of neoconservatism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:29',
                'updated_at' => '2018-11-14 20:48:29',
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Fellows of the Cognitive Science Society',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:29',
                'updated_at' => '2018-11-14 20:48:29',
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Propaganda theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:29',
                'updated_at' => '2018-11-14 20:48:29',
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Hyperreality theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:31',
                'updated_at' => '2018-11-14 20:48:31',
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Finnish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:34',
                'updated_at' => '2018-11-14 20:48:34',
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Game theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:34',
                'updated_at' => '2018-11-14 20:48:34',
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Scottish political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:35',
                'updated_at' => '2018-11-14 20:48:35',
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Scottish historians of philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:35',
                'updated_at' => '2018-11-14 20:48:35',
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Philosophers from Indiana',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:35',
                'updated_at' => '2018-11-14 20:48:35',
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'American scholars of ancient Greek philosophy',
                'type' => 'category',
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
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:41',
                'updated_at' => '2018-11-14 20:48:41',
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Canadian political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:41',
                'updated_at' => '2018-11-14 20:48:41',
            ),
            2 => 
            array (
                'id' => 503,
                'name' => '20th-century theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:43',
                'updated_at' => '2018-11-14 20:48:43',
            ),
            3 => 
            array (
                'id' => 504,
                'name' => '21st-century theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:43',
                'updated_at' => '2018-11-14 20:48:43',
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Maoist theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:46',
                'updated_at' => '2018-11-14 20:48:46',
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Moroccan philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:46',
                'updated_at' => '2018-11-14 20:48:46',
            ),
            6 => 
            array (
                'id' => 507,
            'name' => 'Critics of Objectivism (Ayn Rand)',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:47',
                'updated_at' => '2018-11-14 20:48:47',
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Philosophy of Robert Nozick',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:48',
                'updated_at' => '2018-11-14 20:48:48',
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'American metaphysics writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:49',
                'updated_at' => '2018-11-14 20:48:49',
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Philosophers from Nebraska',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:50',
                'updated_at' => '2018-11-14 20:48:50',
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Philosopher\'s Annual Prize winners',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:51',
                'updated_at' => '2018-11-14 20:48:51',
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Philosophers of culture',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:52',
                'updated_at' => '2018-11-14 20:48:52',
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Scholars of modern philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:52',
                'updated_at' => '2018-11-14 20:48:52',
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Literary critics of Basque',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:52',
                'updated_at' => '2018-11-14 20:48:52',
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Meta-ethics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:53',
                'updated_at' => '2018-11-14 20:48:53',
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Indian feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:54',
                'updated_at' => '2018-11-14 20:48:54',
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:54',
                'updated_at' => '2018-11-14 20:48:54',
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Contemporary Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:54',
                'updated_at' => '2018-11-14 20:48:54',
            ),
            18 => 
            array (
                'id' => 519,
                'name' => '21st-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:55',
                'updated_at' => '2018-11-14 20:48:55',
            ),
            19 => 
            array (
                'id' => 520,
                'name' => '20th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:55',
                'updated_at' => '2018-11-14 20:48:55',
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Bioethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:56',
                'updated_at' => '2018-11-14 20:48:56',
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Environmental philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:56',
                'updated_at' => '2018-11-14 20:48:56',
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Film theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:57',
                'updated_at' => '2018-11-14 20:48:57',
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Slovenian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:57',
                'updated_at' => '2018-11-14 20:48:57',
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Slovenian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:58',
                'updated_at' => '2018-11-14 20:48:58',
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Atheist theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:58',
                'updated_at' => '2018-11-14 20:48:58',
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'African-American philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:59',
                'updated_at' => '2018-11-14 20:48:59',
            ),
            27 => 
            array (
                'id' => 528,
            'name' => 'Union Theological Seminary (New York City) faculty',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:48:59',
                'updated_at' => '2018-11-14 20:48:59',
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Framing theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:00',
                'updated_at' => '2018-11-14 20:49:00',
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Lesbian feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'Postmodern feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Queer theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Transfeminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:01',
                'updated_at' => '2018-11-14 20:49:01',
            ),
            33 => 
            array (
                'id' => 534,
            'name' => 'Legalism (Chinese philosophy)',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:02',
                'updated_at' => '2018-11-14 20:49:02',
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Zhou dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:02',
                'updated_at' => '2018-11-14 20:49:02',
            ),
            35 => 
            array (
                'id' => 536,
            'name' => 'Philosophers from Lu (state)',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:02',
                'updated_at' => '2018-11-14 20:49:02',
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'People whose existence is disputed',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:03',
                'updated_at' => '2018-11-14 20:49:03',
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Chinese philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:03',
                'updated_at' => '2018-11-14 20:49:03',
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Philosophy books',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:03',
                'updated_at' => '2018-11-14 20:49:03',
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Chinese ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Chinese logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Chinese political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Moral psychology',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:04',
                'updated_at' => '2018-11-14 20:49:04',
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'History of logic',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:05',
                'updated_at' => '2018-11-14 20:49:05',
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Ancient Chinese philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:05',
                'updated_at' => '2018-11-14 20:49:05',
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Qin dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:06',
                'updated_at' => '2018-11-14 20:49:06',
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Philosophers from Henan',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:06',
                'updated_at' => '2018-11-14 20:49:06',
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Philosophers from Anhui',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:08',
                'updated_at' => '2018-11-14 20:49:08',
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Philosophers from Shanxi',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:08',
                'updated_at' => '2018-11-14 20:49:08',
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Philosophers from Shandong',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'Han dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Philosophers from Hebei',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Three Kingdoms philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:09',
                'updated_at' => '2018-11-14 20:49:09',
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Philosophers from Zhejiang',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:10',
                'updated_at' => '2018-11-14 20:49:10',
            ),
            54 => 
            array (
                'id' => 555,
            'name' => 'Jin dynasty (265-420) philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:10',
                'updated_at' => '2018-11-14 20:49:10',
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Buddhist philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:11',
                'updated_at' => '2018-11-14 20:49:11',
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'Sixteen Kingdoms philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:11',
                'updated_at' => '2018-11-14 20:49:11',
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Philosophers from Shaanxi',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:11',
                'updated_at' => '2018-11-14 20:49:11',
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Philosophers from Jiangsu',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            59 => 
            array (
                'id' => 560,
                'name' => '7th-century philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Northern and Southern dynasties philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Sui dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Tang dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:12',
                'updated_at' => '2018-11-14 20:49:12',
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Philosophers from Gansu',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:13',
                'updated_at' => '2018-11-14 20:49:13',
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Critics of Buddhism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:13',
                'updated_at' => '2018-11-14 20:49:13',
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'Philosophers from Sichuan',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:13',
                'updated_at' => '2018-11-14 20:49:13',
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Song dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:14',
                'updated_at' => '2018-11-14 20:49:14',
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Philosophers from Hubei',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:15',
                'updated_at' => '2018-11-14 20:49:15',
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'Philosophers from Hunan',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:15',
                'updated_at' => '2018-11-14 20:49:15',
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Philosophers from Fujian',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:16',
                'updated_at' => '2018-11-14 20:49:16',
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Philosophers from Jiangxi',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:16',
                'updated_at' => '2018-11-14 20:49:16',
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Qing dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:17',
                'updated_at' => '2018-11-14 20:49:17',
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'Ming dynasty philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:17',
                'updated_at' => '2018-11-14 20:49:17',
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Philosophers from Guangdong',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:17',
                'updated_at' => '2018-11-14 20:49:17',
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Cao Dai saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:18',
                'updated_at' => '2018-11-14 20:49:18',
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Chinese feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:20',
                'updated_at' => '2018-11-14 20:49:20',
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Republic of China philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:20',
                'updated_at' => '2018-11-14 20:49:20',
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'Contemporary Chinese philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:20',
                'updated_at' => '2018-11-14 20:49:20',
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Taiwanese philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:21',
                'updated_at' => '2018-11-14 20:49:21',
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Historians of philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:21',
                'updated_at' => '2018-11-14 20:49:21',
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'People\'s Republic of China philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:21',
                'updated_at' => '2018-11-14 20:49:21',
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'New Confucian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:22',
                'updated_at' => '2018-11-14 20:49:22',
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Hong Kong philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:22',
                'updated_at' => '2018-11-14 20:49:22',
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Philosophers from Shanghai',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:23',
                'updated_at' => '2018-11-14 20:49:23',
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Philosophers from Beijing',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:23',
                'updated_at' => '2018-11-14 20:49:23',
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Guerrilla warfare theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:24',
                'updated_at' => '2018-11-14 20:49:24',
            ),
            86 => 
            array (
                'id' => 587,
                'name' => '6th-century BC Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:25',
                'updated_at' => '2018-11-14 20:49:25',
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'Ancient Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:25',
                'updated_at' => '2018-11-14 20:49:25',
            ),
            88 => 
            array (
                'id' => 589,
                'name' => '5th-century BC Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:26',
                'updated_at' => '2018-11-14 20:49:26',
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'Hindu philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:26',
                'updated_at' => '2018-11-14 20:49:26',
            ),
            90 => 
            array (
                'id' => 591,
                'name' => '4th-century BC Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:26',
                'updated_at' => '2018-11-14 20:49:26',
            ),
            91 => 
            array (
                'id' => 592,
                'name' => '4th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'Epistemology literature',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'Logic literature',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Metaphysics literature',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            95 => 
            array (
                'id' => 596,
                'name' => '3rd-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:27',
                'updated_at' => '2018-11-14 20:49:27',
            ),
            96 => 
            array (
                'id' => 597,
                'name' => '2nd-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:28',
                'updated_at' => '2018-11-14 20:49:28',
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Jain philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:28',
                'updated_at' => '2018-11-14 20:49:28',
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Buddhist logic',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:29',
                'updated_at' => '2018-11-14 20:49:29',
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Indian logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:29',
                'updated_at' => '2018-11-14 20:49:29',
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Pakistani philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:29',
                'updated_at' => '2018-11-14 20:49:29',
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Philosophy of love',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:30',
                'updated_at' => '2018-11-14 20:49:30',
            ),
            102 => 
            array (
                'id' => 603,
                'name' => '6th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:30',
                'updated_at' => '2018-11-14 20:49:30',
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Eastern philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:31',
                'updated_at' => '2018-11-14 20:49:31',
            ),
            104 => 
            array (
                'id' => 605,
                'name' => '5th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:31',
                'updated_at' => '2018-11-14 20:49:31',
            ),
            105 => 
            array (
                'id' => 606,
                'name' => '8th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:32',
                'updated_at' => '2018-11-14 20:49:32',
            ),
            106 => 
            array (
                'id' => 607,
                'name' => '10th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:32',
                'updated_at' => '2018-11-14 20:49:32',
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Philosophers of Mithila',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:32',
                'updated_at' => '2018-11-14 20:49:32',
            ),
            108 => 
            array (
                'id' => 609,
                'name' => '7th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:33',
                'updated_at' => '2018-11-14 20:49:33',
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'Advaitin philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:34',
                'updated_at' => '2018-11-14 20:49:34',
            ),
            110 => 
            array (
                'id' => 611,
                'name' => '9th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:34',
                'updated_at' => '2018-11-14 20:49:34',
            ),
            111 => 
            array (
                'id' => 612,
                'name' => '11th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            112 => 
            array (
                'id' => 613,
                'name' => '12th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Vishishtadvaita Vedanta',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Vaishnava saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:36',
                'updated_at' => '2018-11-14 20:49:36',
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Hindu mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Hindu saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Lingayat saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            118 => 
            array (
                'id' => 619,
                'name' => '13th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:37',
                'updated_at' => '2018-11-14 20:49:37',
            ),
            119 => 
            array (
                'id' => 620,
                'name' => '14th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:38',
                'updated_at' => '2018-11-14 20:49:38',
            ),
            120 => 
            array (
                'id' => 621,
                'name' => '15th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:39',
                'updated_at' => '2018-11-14 20:49:39',
            ),
            121 => 
            array (
                'id' => 622,
                'name' => '16th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:39',
                'updated_at' => '2018-11-14 20:49:39',
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Sant Mat gurus',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:39',
                'updated_at' => '2018-11-14 20:49:39',
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Dalit saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:41',
                'updated_at' => '2018-11-14 20:49:41',
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Sikh gurus',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:41',
                'updated_at' => '2018-11-14 20:49:41',
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'Sikhism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:41',
                'updated_at' => '2018-11-14 20:49:41',
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'Bengali philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:42',
                'updated_at' => '2018-11-14 20:49:42',
            ),
            127 => 
            array (
                'id' => 628,
                'name' => '17th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:42',
                'updated_at' => '2018-11-14 20:49:42',
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Indian Sufi saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:43',
                'updated_at' => '2018-11-14 20:49:43',
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Advaita',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:43',
                'updated_at' => '2018-11-14 20:49:43',
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Neo-Advaita',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:43',
                'updated_at' => '2018-11-14 20:49:43',
            ),
            131 => 
            array (
                'id' => 632,
                'name' => '19th-century Indian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:44',
                'updated_at' => '2018-11-14 20:49:44',
            ),
            132 => 
            array (
                'id' => 633,
                'name' => '19th-century Indian educational theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:44',
                'updated_at' => '2018-11-14 20:49:44',
            ),
            133 => 
            array (
                'id' => 634,
                'name' => '20th-century Indian educational theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:45',
                'updated_at' => '2018-11-14 20:49:45',
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'Indian political philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:46',
                'updated_at' => '2018-11-14 20:49:46',
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Urdu theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:47',
                'updated_at' => '2018-11-14 20:49:47',
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'Spalding Professors of Eastern Religion and Ethics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:49',
                'updated_at' => '2018-11-14 20:49:49',
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Bangladeshi philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:50',
                'updated_at' => '2018-11-14 20:49:50',
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Former Theosophists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:52',
                'updated_at' => '2018-11-14 20:49:52',
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'Indian political theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:54',
                'updated_at' => '2018-11-14 20:49:54',
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Japanese philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:55',
                'updated_at' => '2018-11-14 20:49:55',
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Japanese Theosophists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:57',
                'updated_at' => '2018-11-14 20:49:57',
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Buddhist existentialists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:58',
                'updated_at' => '2018-11-14 20:49:58',
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Japanese ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:49:58',
                'updated_at' => '2018-11-14 20:49:58',
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'Korean philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:00',
                'updated_at' => '2018-11-14 20:50:00',
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'South Korean philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Quaker philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Tibetan philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Nepalese philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:02',
                'updated_at' => '2018-11-14 20:50:02',
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Ancient Greek philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:04',
                'updated_at' => '2018-11-14 20:50:04',
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'Pythagoreans of Magna Graecia',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:05',
                'updated_at' => '2018-11-14 20:50:05',
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Women philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:06',
                'updated_at' => '2018-11-14 20:50:06',
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Megarian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            153 => 
            array (
                'id' => 654,
                'name' => '4th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Coptic Orthodox saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'Egyptian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'Egyptian Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Late Ancient Christian female saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Saints from Roman Egypt',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:07',
                'updated_at' => '2018-11-14 20:50:07',
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'Ancient Greek philosophers of art',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:08',
                'updated_at' => '2018-11-14 20:50:08',
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'Chinese philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:09',
                'updated_at' => '2018-11-14 20:50:09',
            ),
            161 => 
            array (
                'id' => 662,
                'name' => '14th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:12',
                'updated_at' => '2018-11-14 20:50:12',
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'Female saints of medieval Italy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:12',
                'updated_at' => '2018-11-14 20:50:12',
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Female saints of medieval Germany',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:13',
                'updated_at' => '2018-11-14 20:50:13',
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Medieval German saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:13',
                'updated_at' => '2018-11-14 20:50:13',
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'English educational theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:14',
                'updated_at' => '2018-11-14 20:50:14',
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'British feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:14',
                'updated_at' => '2018-11-14 20:50:14',
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'American Theosophists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:15',
                'updated_at' => '2018-11-14 20:50:15',
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Congregationalist feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:15',
                'updated_at' => '2018-11-14 20:50:15',
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'Unitarian feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:16',
                'updated_at' => '2018-11-14 20:50:16',
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Austrian feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:18',
                'updated_at' => '2018-11-14 20:50:18',
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Mexican philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:19',
                'updated_at' => '2018-11-14 20:50:19',
            ),
            172 => 
            array (
                'id' => 673,
                'name' => '20th-century Christian saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            173 => 
            array (
                'id' => 674,
                'name' => '20th-century German Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Carmelite mystics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Carmelite saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Catholic saints and blesseds of the Nazi era',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:20',
                'updated_at' => '2018-11-14 20:50:20',
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Philosophers from Rhode Island',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:21',
                'updated_at' => '2018-11-14 20:50:21',
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'American Episcopal theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:22',
                'updated_at' => '2018-11-14 20:50:22',
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'Christian feminist theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:22',
                'updated_at' => '2018-11-14 20:50:22',
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'Presidents of the Society for Medieval and Renaissance Philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'Princeton Theological Seminary alumni',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'Scholars of medieval philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'Anglican feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:23',
                'updated_at' => '2018-11-14 20:50:23',
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'Philosophers from New Hampshire',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:26',
                'updated_at' => '2018-11-14 20:50:26',
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Philosophers from Florida',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:26',
                'updated_at' => '2018-11-14 20:50:26',
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Philosophers from Wisconsin',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:27',
                'updated_at' => '2018-11-14 20:50:27',
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Philosophers from Arizona',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:27',
                'updated_at' => '2018-11-14 20:50:27',
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'New Zealand philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:32',
                'updated_at' => '2018-11-14 20:50:32',
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Turkish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:35',
                'updated_at' => '2018-11-14 20:50:35',
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'Norwegian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:39',
                'updated_at' => '2018-11-14 20:50:39',
            ),
            191 => 
            array (
                'id' => 692,
            'name' => 'Philosophers from Washington (state)',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:44',
                'updated_at' => '2018-11-14 20:50:44',
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Ecofeminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:46',
                'updated_at' => '2018-11-14 20:50:46',
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'French philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:47',
                'updated_at' => '2018-11-14 20:50:47',
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Scholars of contemporary philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:47',
                'updated_at' => '2018-11-14 20:50:47',
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'Australian feminist writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:47',
                'updated_at' => '2018-11-14 20:50:47',
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Radical feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:52',
                'updated_at' => '2018-11-14 20:50:52',
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Africana philosophy',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:55',
                'updated_at' => '2018-11-14 20:50:55',
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Existentialism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:57',
                'updated_at' => '2018-11-14 20:50:57',
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Philosophers from Hawaii',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:58',
                'updated_at' => '2018-11-14 20:50:58',
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'Philosophers from Colorado',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:50:59',
                'updated_at' => '2018-11-14 20:50:59',
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Swiss philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:03',
                'updated_at' => '2018-11-14 20:51:03',
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Philosophy of physics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:08',
                'updated_at' => '2018-11-14 20:51:08',
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Canadian logicians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:09',
                'updated_at' => '2018-11-14 20:51:09',
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Bulgarian literary theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Bulgarian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Bulgarian feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Bulgarian semioticians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:14',
                'updated_at' => '2018-11-14 20:51:14',
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Environmental ethics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:26',
                'updated_at' => '2018-11-14 20:51:26',
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'American Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:27',
                'updated_at' => '2018-11-14 20:51:27',
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Graduate Theological Union alumni',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:27',
                'updated_at' => '2018-11-14 20:51:27',
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Fuller Theological Seminary faculty',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:27',
                'updated_at' => '2018-11-14 20:51:27',
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Women Christian theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:28',
                'updated_at' => '2018-11-14 20:51:28',
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'Philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:31',
                'updated_at' => '2018-11-14 20:51:31',
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Feminist ethics',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:32',
                'updated_at' => '2018-11-14 20:51:32',
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Ecotheology',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            216 => 
            array (
                'id' => 717,
                'name' => '20th-century American Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            217 => 
            array (
                'id' => 718,
                'name' => '21st-century American Roman Catholic theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Roman Catholic feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'Liberation theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:36',
                'updated_at' => '2018-11-14 20:51:36',
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'American literary theorists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:38',
                'updated_at' => '2018-11-14 20:51:38',
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Literary critics of German',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:38',
                'updated_at' => '2018-11-14 20:51:38',
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Philosophy of law',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:42',
                'updated_at' => '2018-11-14 20:51:42',
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Hindu feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:43',
                'updated_at' => '2018-11-14 20:51:43',
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Indian feminist writers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:43',
                'updated_at' => '2018-11-14 20:51:43',
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Canadian feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:44',
                'updated_at' => '2018-11-14 20:51:44',
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Medical ethicists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:45',
                'updated_at' => '2018-11-14 20:51:45',
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'German feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:46',
                'updated_at' => '2018-11-14 20:51:46',
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'Philosophers from Tennessee',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:47',
                'updated_at' => '2018-11-14 20:51:47',
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:54',
                'updated_at' => '2018-11-14 20:51:54',
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Feminist historians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:51:54',
                'updated_at' => '2018-11-14 20:51:54',
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'Brazilian philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:08',
                'updated_at' => '2018-11-14 20:53:08',
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Modern philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:08',
                'updated_at' => '2018-11-14 20:53:08',
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'LGBT feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:09',
                'updated_at' => '2018-11-14 20:53:09',
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Women cognitive scientists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:10',
                'updated_at' => '2018-11-14 20:53:10',
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Danish Protestant theologians',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:12',
                'updated_at' => '2018-11-14 20:53:12',
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Republic of Venice philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:18',
                'updated_at' => '2018-11-14 20:53:18',
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'Spanish Roman Catholic saints',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:21',
                'updated_at' => '2018-11-14 20:53:21',
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Christian female saints of the Early Modern era',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:22',
                'updated_at' => '2018-11-14 20:53:22',
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Scottish feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:23',
                'updated_at' => '2018-11-14 20:53:23',
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Critics of creationism',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 20:53:24',
                'updated_at' => '2018-11-14 20:53:24',
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Sex-positive feminists',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-14 22:43:13',
                'updated_at' => '2018-11-14 22:43:13',
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'Swedish philosophers',
                'type' => 'category',
                'deleted_at' => NULL,
                'created_at' => '2018-11-16 09:59:37',
                'updated_at' => '2018-11-16 09:59:37',
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'Political philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 02:56:28',
                'updated_at' => '2018-12-04 02:56:28',
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'Botany',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:41',
                'updated_at' => '2018-12-04 03:03:41',
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'Philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:41',
                'updated_at' => '2018-12-04 03:03:41',
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'Meditations',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:41',
                'updated_at' => '2018-12-04 03:03:41',
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'Christian philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:41',
                'updated_at' => '2018-12-04 03:03:41',
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'Medical literature',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:41',
                'updated_at' => '2018-12-04 03:03:41',
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'Islamic philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:41',
                'updated_at' => '2018-12-04 03:03:41',
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'Islamic ethics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'Christianity',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'Comedy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'Non-fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'Dialogue',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'War',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'Religion',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'Hymnal',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'Theology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:42',
                'updated_at' => '2018-12-04 03:03:42',
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'Essay',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:43',
                'updated_at' => '2018-12-04 03:03:43',
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'Barsoom',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:43',
                'updated_at' => '2018-12-04 03:03:43',
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'Utopian novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:43',
                'updated_at' => '2018-12-04 03:03:43',
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'Science fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:43',
                'updated_at' => '2018-12-04 03:03:43',
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'Astronomy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:43',
                'updated_at' => '2018-12-04 03:03:43',
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'Law',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:43',
                'updated_at' => '2018-12-04 03:03:43',
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'Law of the sea',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:43',
                'updated_at' => '2018-12-04 03:03:43',
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'Chemistry',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:44',
                'updated_at' => '2018-12-04 03:03:44',
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'Epistemology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:44',
                'updated_at' => '2018-12-04 03:03:44',
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'Education',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:44',
                'updated_at' => '2018-12-04 03:03:44',
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'Chronology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:44',
                'updated_at' => '2018-12-04 03:03:44',
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'Historical essay',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:44',
                'updated_at' => '2018-12-04 03:03:44',
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'Tragedy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'Conte philosophique',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'Bildungsroman',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            274 => 
            array (
                'id' => 775,
                'name' => 'Satire',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            275 => 
            array (
                'id' => 776,
                'name' => 'Picaresque novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            276 => 
            array (
                'id' => 777,
                'name' => 'History',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            277 => 
            array (
                'id' => 778,
                'name' => 'History of Europe',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            278 => 
            array (
                'id' => 779,
                'name' => 'Historiography',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:45',
                'updated_at' => '2018-12-04 03:03:45',
            ),
            279 => 
            array (
                'id' => 780,
                'name' => 'History of France',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:46',
                'updated_at' => '2018-12-04 03:03:46',
            ),
            280 => 
            array (
                'id' => 781,
                'name' => 'Philosophical novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:46',
                'updated_at' => '2018-12-04 03:03:46',
            ),
            281 => 
            array (
                'id' => 782,
                'name' => 'Novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:46',
                'updated_at' => '2018-12-04 03:03:46',
            ),
            282 => 
            array (
                'id' => 783,
                'name' => 'Literary criticism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:46',
                'updated_at' => '2018-12-04 03:03:46',
            ),
            283 => 
            array (
                'id' => 784,
                'name' => 'Theatre',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:46',
                'updated_at' => '2018-12-04 03:03:46',
            ),
            284 => 
            array (
                'id' => 785,
                'name' => 'Autobiography',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:47',
                'updated_at' => '2018-12-04 03:03:47',
            ),
            285 => 
            array (
                'id' => 786,
                'name' => 'Reference work',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:47',
                'updated_at' => '2018-12-04 03:03:47',
            ),
            286 => 
            array (
                'id' => 787,
                'name' => 'Encyclopaedia',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:47',
                'updated_at' => '2018-12-04 03:03:47',
            ),
            287 => 
            array (
                'id' => 788,
                'name' => 'Drama',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:48',
                'updated_at' => '2018-12-04 03:03:48',
            ),
            288 => 
            array (
                'id' => 789,
                'name' => 'Economics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:48',
                'updated_at' => '2018-12-04 03:03:48',
            ),
            289 => 
            array (
                'id' => 790,
                'name' => 'Morality',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:48',
                'updated_at' => '2018-12-04 03:03:48',
            ),
            290 => 
            array (
                'id' => 791,
                'name' => 'Human nature',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:48',
                'updated_at' => '2018-12-04 03:03:48',
            ),
            291 => 
            array (
                'id' => 792,
                'name' => 'Ethics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:48',
                'updated_at' => '2018-12-04 03:03:48',
            ),
            292 => 
            array (
                'id' => 793,
                'name' => 'Philosophy of religion',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:48',
                'updated_at' => '2018-12-04 03:03:48',
            ),
            293 => 
            array (
                'id' => 794,
                'name' => 'Aesthetics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:49',
                'updated_at' => '2018-12-04 03:03:49',
            ),
            294 => 
            array (
                'id' => 795,
                'name' => 'Critique of Pure Reason',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:49',
                'updated_at' => '2018-12-04 03:03:49',
            ),
            295 => 
            array (
                'id' => 796,
                'name' => 'Immortality',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:49',
                'updated_at' => '2018-12-04 03:03:49',
            ),
            296 => 
            array (
                'id' => 797,
                'name' => 'Bourgeois tragedy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:49',
                'updated_at' => '2018-12-04 03:03:49',
            ),
            297 => 
            array (
                'id' => 798,
                'name' => 'Political theory',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:49',
                'updated_at' => '2018-12-04 03:03:49',
            ),
            298 => 
            array (
                'id' => 799,
                'name' => 'Christian apologetics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:50',
                'updated_at' => '2018-12-04 03:03:50',
            ),
            299 => 
            array (
                'id' => 800,
                'name' => 'Evolution',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:50',
                'updated_at' => '2018-12-04 03:03:50',
            ),
            300 => 
            array (
                'id' => 801,
                'name' => 'Zoology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:50',
                'updated_at' => '2018-12-04 03:03:50',
            ),
            301 => 
            array (
                'id' => 802,
                'name' => 'Metaphysics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:51',
                'updated_at' => '2018-12-04 03:03:51',
            ),
            302 => 
            array (
                'id' => 803,
                'name' => 'Nonfiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:51',
                'updated_at' => '2018-12-04 03:03:51',
            ),
            303 => 
            array (
                'id' => 804,
                'name' => 'Evolutionary biology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:51',
                'updated_at' => '2018-12-04 03:03:51',
            ),
            304 => 
            array (
                'id' => 805,
                'name' => 'Natural selection',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:51',
                'updated_at' => '2018-12-04 03:03:51',
            ),
            305 => 
            array (
                'id' => 806,
                'name' => 'Biology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:51',
                'updated_at' => '2018-12-04 03:03:51',
            ),
            306 => 
            array (
                'id' => 807,
                'name' => 'Science',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:51',
                'updated_at' => '2018-12-04 03:03:51',
            ),
            307 => 
            array (
                'id' => 808,
                'name' => 'Evolutionary theory',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:52',
                'updated_at' => '2018-12-04 03:03:52',
            ),
            308 => 
            array (
                'id' => 809,
                'name' => 'Geology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:52',
                'updated_at' => '2018-12-04 03:03:52',
            ),
            309 => 
            array (
                'id' => 810,
                'name' => 'Artificial selection',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:52',
                'updated_at' => '2018-12-04 03:03:52',
            ),
            310 => 
            array (
                'id' => 811,
                'name' => 'Earthworm',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:52',
                'updated_at' => '2018-12-04 03:03:52',
            ),
            311 => 
            array (
                'id' => 812,
                'name' => 'Christianity, philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:52',
                'updated_at' => '2018-12-04 03:03:52',
            ),
            312 => 
            array (
                'id' => 813,
                'name' => 'Moral philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:53',
                'updated_at' => '2018-12-04 03:03:53',
            ),
            313 => 
            array (
                'id' => 814,
                'name' => 'Psychology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:54',
                'updated_at' => '2018-12-04 03:03:54',
            ),
            314 => 
            array (
                'id' => 815,
                'name' => 'Memoir',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:54',
                'updated_at' => '2018-12-04 03:03:54',
            ),
            315 => 
            array (
                'id' => 816,
                'name' => 'Politics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:54',
                'updated_at' => '2018-12-04 03:03:54',
            ),
            316 => 
            array (
                'id' => 817,
                'name' => 'Political economy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:54',
                'updated_at' => '2018-12-04 03:03:54',
            ),
            317 => 
            array (
                'id' => 818,
                'name' => 'Comedic novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:54',
                'updated_at' => '2018-12-04 03:03:54',
            ),
            318 => 
            array (
                'id' => 819,
                'name' => 'Politics, economics, sociology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:55',
                'updated_at' => '2018-12-04 03:03:55',
            ),
            319 => 
            array (
                'id' => 820,
                'name' => 'Political Theory and Philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:55',
                'updated_at' => '2018-12-04 03:03:55',
            ),
            320 => 
            array (
                'id' => 821,
                'name' => 'Elitism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:55',
                'updated_at' => '2018-12-04 03:03:55',
            ),
            321 => 
            array (
                'id' => 822,
                'name' => 'Jesus',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:56',
                'updated_at' => '2018-12-04 03:03:56',
            ),
            322 => 
            array (
                'id' => 823,
                'name' => 'Saint Paul',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:56',
                'updated_at' => '2018-12-04 03:03:56',
            ),
            323 => 
            array (
                'id' => 824,
                'name' => 'Plutocracy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:56',
                'updated_at' => '2018-12-04 03:03:56',
            ),
            324 => 
            array (
                'id' => 825,
                'name' => 'Democracy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:56',
                'updated_at' => '2018-12-04 03:03:56',
            ),
            325 => 
            array (
                'id' => 826,
                'name' => 'Poetry',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:57',
                'updated_at' => '2018-12-04 03:03:57',
            ),
            326 => 
            array (
                'id' => 827,
                'name' => 'Anti-semitism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:57',
                'updated_at' => '2018-12-04 03:03:57',
            ),
            327 => 
            array (
                'id' => 828,
                'name' => 'Philosophy of art',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:57',
                'updated_at' => '2018-12-04 03:03:57',
            ),
            328 => 
            array (
                'id' => 829,
                'name' => 'Richard Wagner',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:57',
                'updated_at' => '2018-12-04 03:03:57',
            ),
            329 => 
            array (
                'id' => 830,
                'name' => 'Apollonian and Dionysian',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:57',
                'updated_at' => '2018-12-04 03:03:57',
            ),
            330 => 
            array (
                'id' => 831,
                'name' => 'Classical Athens',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:57',
                'updated_at' => '2018-12-04 03:03:57',
            ),
            331 => 
            array (
                'id' => 832,
                'name' => 'God is dead',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:57',
                'updated_at' => '2018-12-04 03:03:57',
            ),
            332 => 
            array (
                'id' => 833,
                'name' => 'Immanuel Kant',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:58',
                'updated_at' => '2018-12-04 03:03:58',
            ),
            333 => 
            array (
                'id' => 834,
                'name' => 'Linguistics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:58',
                'updated_at' => '2018-12-04 03:03:58',
            ),
            334 => 
            array (
                'id' => 835,
                'name' => 'Sociology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:58',
                'updated_at' => '2018-12-04 03:03:58',
            ),
            335 => 
            array (
                'id' => 836,
                'name' => 'Suicide',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:58',
                'updated_at' => '2018-12-04 03:03:58',
            ),
            336 => 
            array (
                'id' => 837,
            'name' => 'Phenomenology (philosophy)',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:59',
                'updated_at' => '2018-12-04 03:03:59',
            ),
            337 => 
            array (
                'id' => 838,
                'name' => 'Philosophy of Mathematics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:59',
                'updated_at' => '2018-12-04 03:03:59',
            ),
            338 => 
            array (
                'id' => 839,
                'name' => 'Logic',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:03:59',
                'updated_at' => '2018-12-04 03:03:59',
            ),
            339 => 
            array (
                'id' => 840,
                'name' => 'Economic sociology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:00',
                'updated_at' => '2018-12-04 03:04:00',
            ),
            340 => 
            array (
                'id' => 841,
                'name' => 'Sociology of religion',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:00',
                'updated_at' => '2018-12-04 03:04:00',
            ),
            341 => 
            array (
                'id' => 842,
                'name' => 'Soviet Union',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:00',
                'updated_at' => '2018-12-04 03:04:00',
            ),
            342 => 
            array (
                'id' => 843,
                'name' => 'Anarchism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:00',
                'updated_at' => '2018-12-04 03:04:00',
            ),
            343 => 
            array (
                'id' => 844,
                'name' => 'Political sociology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:01',
                'updated_at' => '2018-12-04 03:04:01',
            ),
            344 => 
            array (
                'id' => 845,
                'name' => 'Social philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:01',
                'updated_at' => '2018-12-04 03:04:01',
            ),
            345 => 
            array (
                'id' => 846,
                'name' => 'Philosophical anthropology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:01',
                'updated_at' => '2018-12-04 03:04:01',
            ),
            346 => 
            array (
                'id' => 847,
                'name' => 'Symbolic logic',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:01',
                'updated_at' => '2018-12-04 03:04:01',
            ),
            347 => 
            array (
                'id' => 848,
                'name' => 'Foundations of mathematics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:01',
                'updated_at' => '2018-12-04 03:04:01',
            ),
            348 => 
            array (
                'id' => 849,
                'name' => 'Essay Collection',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:02',
                'updated_at' => '2018-12-04 03:04:02',
            ),
            349 => 
            array (
                'id' => 850,
                'name' => 'Western philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:02',
                'updated_at' => '2018-12-04 03:04:02',
            ),
            350 => 
            array (
                'id' => 851,
                'name' => 'Anthropology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:02',
                'updated_at' => '2018-12-04 03:04:02',
            ),
            351 => 
            array (
                'id' => 852,
                'name' => 'Speculative philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:03',
                'updated_at' => '2018-12-04 03:04:03',
            ),
            352 => 
            array (
                'id' => 853,
                'name' => 'Architecture',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:03',
                'updated_at' => '2018-12-04 03:04:03',
            ),
            353 => 
            array (
                'id' => 854,
                'name' => 'Karl Marx',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:03',
                'updated_at' => '2018-12-04 03:04:03',
            ),
            354 => 
            array (
                'id' => 855,
                'name' => 'Marxism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:03',
                'updated_at' => '2018-12-04 03:04:03',
            ),
            355 => 
            array (
                'id' => 856,
                'name' => 'Georg Wilhelm Friedrich Hegel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:03',
                'updated_at' => '2018-12-04 03:04:03',
            ),
            356 => 
            array (
                'id' => 857,
                'name' => 'Mysticism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:04',
                'updated_at' => '2018-12-04 03:04:04',
            ),
            357 => 
            array (
                'id' => 858,
                'name' => 'Being',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:04',
                'updated_at' => '2018-12-04 03:04:04',
            ),
            358 => 
            array (
                'id' => 859,
                'name' => 'Ontology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:04',
                'updated_at' => '2018-12-04 03:04:04',
            ),
            359 => 
            array (
                'id' => 860,
                'name' => 'Hermeneutics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:04',
                'updated_at' => '2018-12-04 03:04:04',
            ),
            360 => 
            array (
                'id' => 861,
                'name' => 'Philosophy of technology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:05',
                'updated_at' => '2018-12-04 03:04:05',
            ),
            361 => 
            array (
                'id' => 862,
                'name' => 'Historical fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:05',
                'updated_at' => '2018-12-04 03:04:05',
            ),
            362 => 
            array (
                'id' => 863,
                'name' => 'Erotic literature',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:05',
                'updated_at' => '2018-12-04 03:04:05',
            ),
            363 => 
            array (
                'id' => 864,
                'name' => 'New Left',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:05',
                'updated_at' => '2018-12-04 03:04:05',
            ),
            364 => 
            array (
                'id' => 865,
                'name' => 'Capitalism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:05',
                'updated_at' => '2018-12-04 03:04:05',
            ),
            365 => 
            array (
                'id' => 866,
                'name' => 'Toleration',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:06',
                'updated_at' => '2018-12-04 03:04:06',
            ),
            366 => 
            array (
                'id' => 867,
                'name' => 'Freedom of speech',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:06',
                'updated_at' => '2018-12-04 03:04:06',
            ),
            367 => 
            array (
                'id' => 868,
                'name' => 'Ideology of the Communist Party of the Soviet Union',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:06',
                'updated_at' => '2018-12-04 03:04:06',
            ),
            368 => 
            array (
                'id' => 869,
                'name' => 'Sigmund Freud',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:06',
                'updated_at' => '2018-12-04 03:04:06',
            ),
            369 => 
            array (
                'id' => 870,
                'name' => 'Philosophy of mind',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:07',
                'updated_at' => '2018-12-04 03:04:07',
            ),
            370 => 
            array (
                'id' => 871,
                'name' => 'Psychoanalysis',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:07',
                'updated_at' => '2018-12-04 03:04:07',
            ),
            371 => 
            array (
                'id' => 872,
                'name' => 'Probability',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:07',
                'updated_at' => '2018-12-04 03:04:07',
            ),
            372 => 
            array (
                'id' => 873,
                'name' => 'Philosophy of science',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:07',
                'updated_at' => '2018-12-04 03:04:07',
            ),
            373 => 
            array (
                'id' => 874,
                'name' => 'Historicism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:07',
                'updated_at' => '2018-12-04 03:04:07',
            ),
            374 => 
            array (
                'id' => 875,
                'name' => 'Emotion',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:08',
                'updated_at' => '2018-12-04 03:04:08',
            ),
            375 => 
            array (
                'id' => 876,
                'name' => 'Existentialism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:08',
                'updated_at' => '2018-12-04 03:04:08',
            ),
            376 => 
            array (
                'id' => 877,
                'name' => 'Jean Genet',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:08',
                'updated_at' => '2018-12-04 03:04:08',
            ),
            377 => 
            array (
                'id' => 878,
                'name' => 'Imagination',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:09',
                'updated_at' => '2018-12-04 03:04:09',
            ),
            378 => 
            array (
                'id' => 879,
                'name' => 'Antisemitism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:09',
                'updated_at' => '2018-12-04 03:04:09',
            ),
            379 => 
            array (
                'id' => 880,
                'name' => 'Political drama',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:09',
                'updated_at' => '2018-12-04 03:04:09',
            ),
            380 => 
            array (
                'id' => 881,
                'name' => 'Short story',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:09',
                'updated_at' => '2018-12-04 03:04:09',
            ),
            381 => 
            array (
                'id' => 882,
                'name' => 'History of philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:09',
                'updated_at' => '2018-12-04 03:04:09',
            ),
            382 => 
            array (
                'id' => 883,
                'name' => 'Fiction writing',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:10',
                'updated_at' => '2018-12-04 03:04:10',
            ),
            383 => 
            array (
                'id' => 884,
                'name' => 'Autobiographical novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:10',
                'updated_at' => '2018-12-04 03:04:10',
            ),
            384 => 
            array (
                'id' => 885,
            'name' => 'Objectivism (Ayn Rand)',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:10',
                'updated_at' => '2018-12-04 03:04:10',
            ),
            385 => 
            array (
                'id' => 886,
                'name' => 'Utopia',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:10',
                'updated_at' => '2018-12-04 03:04:10',
            ),
            386 => 
            array (
                'id' => 887,
                'name' => 'Mystery fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:11',
                'updated_at' => '2018-12-04 03:04:11',
            ),
            387 => 
            array (
                'id' => 888,
                'name' => 'Romance novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:11',
                'updated_at' => '2018-12-04 03:04:11',
            ),
            388 => 
            array (
                'id' => 889,
                'name' => 'Philosophical fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:11',
                'updated_at' => '2018-12-04 03:04:11',
            ),
            389 => 
            array (
                'id' => 890,
                'name' => 'Courtroom drama',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:11',
                'updated_at' => '2018-12-04 03:04:11',
            ),
            390 => 
            array (
                'id' => 891,
                'name' => 'Melodrama',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:11',
                'updated_at' => '2018-12-04 03:04:11',
            ),
            391 => 
            array (
                'id' => 892,
                'name' => 'Stalinism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:12',
                'updated_at' => '2018-12-04 03:04:12',
            ),
            392 => 
            array (
                'id' => 893,
                'name' => 'Nazism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:12',
                'updated_at' => '2018-12-04 03:04:12',
            ),
            393 => 
            array (
                'id' => 894,
                'name' => 'Totalitarianism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:12',
                'updated_at' => '2018-12-04 03:04:12',
            ),
            394 => 
            array (
                'id' => 895,
                'name' => 'Human body',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:12',
                'updated_at' => '2018-12-04 03:04:12',
            ),
            395 => 
            array (
                'id' => 896,
                'name' => 'Perception',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:12',
                'updated_at' => '2018-12-04 03:04:12',
            ),
            396 => 
            array (
                'id' => 897,
                'name' => 'Feminism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:12',
                'updated_at' => '2018-12-04 03:04:12',
            ),
            397 => 
            array (
                'id' => 898,
                'name' => 'Metaphysical novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:12',
                'updated_at' => '2018-12-04 03:04:12',
            ),
            398 => 
            array (
                'id' => 899,
                'name' => 'Language',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:13',
                'updated_at' => '2018-12-04 03:04:13',
            ),
            399 => 
            array (
                'id' => 900,
                'name' => 'Media studies',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:13',
                'updated_at' => '2018-12-04 03:04:13',
            ),
            400 => 
            array (
                'id' => 901,
                'name' => 'History of communication',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:13',
                'updated_at' => '2018-12-04 03:04:13',
            ),
            401 => 
            array (
                'id' => 902,
                'name' => 'Communications',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:13',
                'updated_at' => '2018-12-04 03:04:13',
            ),
            402 => 
            array (
                'id' => 903,
                'name' => 'Absurdism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:13',
                'updated_at' => '2018-12-04 03:04:13',
            ),
            403 => 
            array (
                'id' => 904,
                'name' => 'Rebellion',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:13',
                'updated_at' => '2018-12-04 03:04:13',
            ),
            404 => 
            array (
                'id' => 905,
                'name' => 'Literary realism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:14',
                'updated_at' => '2018-12-04 03:04:14',
            ),
            405 => 
            array (
                'id' => 906,
                'name' => 'Existentialist',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:14',
                'updated_at' => '2018-12-04 03:04:14',
            ),
            406 => 
            array (
                'id' => 907,
                'name' => 'Cultural studies',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:14',
                'updated_at' => '2018-12-04 03:04:14',
            ),
            407 => 
            array (
                'id' => 908,
                'name' => 'Semiotics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:14',
                'updated_at' => '2018-12-04 03:04:14',
            ),
            408 => 
            array (
                'id' => 909,
                'name' => 'Structuralism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:15',
                'updated_at' => '2018-12-04 03:04:15',
            ),
            409 => 
            array (
                'id' => 910,
                'name' => 'Photography',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:15',
                'updated_at' => '2018-12-04 03:04:15',
            ),
            410 => 
            array (
                'id' => 911,
                'name' => 'Sarrasine',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:15',
                'updated_at' => '2018-12-04 03:04:15',
            ),
            411 => 
            array (
                'id' => 912,
                'name' => 'Reading Capital',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:15',
                'updated_at' => '2018-12-04 03:04:15',
            ),
            412 => 
            array (
                'id' => 913,
                'name' => 'Capital: Critique of Political Economy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:15',
                'updated_at' => '2018-12-04 03:04:15',
            ),
            413 => 
            array (
                'id' => 914,
                'name' => 'For Marx',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:15',
                'updated_at' => '2018-12-04 03:04:15',
            ),
            414 => 
            array (
                'id' => 915,
                'name' => 'Vladimir Lenin',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:16',
                'updated_at' => '2018-12-04 03:04:16',
            ),
            415 => 
            array (
                'id' => 916,
                'name' => 'Justice',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:16',
                'updated_at' => '2018-12-04 03:04:16',
            ),
            416 => 
            array (
                'id' => 917,
                'name' => 'A Theory of Justice',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:16',
                'updated_at' => '2018-12-04 03:04:16',
            ),
            417 => 
            array (
                'id' => 918,
                'name' => 'Distributive justice',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:16',
                'updated_at' => '2018-12-04 03:04:16',
            ),
            418 => 
            array (
                'id' => 919,
                'name' => 'Violence',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:16',
                'updated_at' => '2018-12-04 03:04:16',
            ),
            419 => 
            array (
                'id' => 920,
                'name' => 'Racism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:16',
                'updated_at' => '2018-12-04 03:04:16',
            ),
            420 => 
            array (
                'id' => 921,
                'name' => 'Post-colonialism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:16',
                'updated_at' => '2018-12-04 03:04:16',
            ),
            421 => 
            array (
                'id' => 922,
                'name' => 'Revolution',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:17',
                'updated_at' => '2018-12-04 03:04:17',
            ),
            422 => 
            array (
                'id' => 923,
                'name' => 'Third-world development',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:17',
                'updated_at' => '2018-12-04 03:04:17',
            ),
            423 => 
            array (
                'id' => 924,
                'name' => 'Colonialism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:17',
                'updated_at' => '2018-12-04 03:04:17',
            ),
            424 => 
            array (
                'id' => 925,
                'name' => 'Friedrich Nietzsche',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:17',
                'updated_at' => '2018-12-04 03:04:17',
            ),
            425 => 
            array (
                'id' => 926,
                'name' => 'Baruch Spinoza',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:17',
                'updated_at' => '2018-12-04 03:04:17',
            ),
            426 => 
            array (
                'id' => 927,
                'name' => 'Literature',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:17',
                'updated_at' => '2018-12-04 03:04:17',
            ),
            427 => 
            array (
                'id' => 928,
                'name' => 'Leopold von Sacher-Masoch',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:17',
                'updated_at' => '2018-12-04 03:04:17',
            ),
            428 => 
            array (
                'id' => 929,
            'name' => 'Desire (philosophy)',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:18',
                'updated_at' => '2018-12-04 03:04:18',
            ),
            429 => 
            array (
                'id' => 930,
                'name' => 'Film theory',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:18',
                'updated_at' => '2018-12-04 03:04:18',
            ),
            430 => 
            array (
                'id' => 931,
            'name' => 'Francis Bacon (artist)',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:18',
                'updated_at' => '2018-12-04 03:04:18',
            ),
            431 => 
            array (
                'id' => 932,
                'name' => 'Marcel Proust',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:18',
                'updated_at' => '2018-12-04 03:04:18',
            ),
            432 => 
            array (
                'id' => 933,
                'name' => 'Human science',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:18',
                'updated_at' => '2018-12-04 03:04:18',
            ),
            433 => 
            array (
                'id' => 934,
                'name' => 'Insanity',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:18',
                'updated_at' => '2018-12-04 03:04:18',
            ),
            434 => 
            array (
                'id' => 935,
                'name' => 'History of human sexuality',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:19',
                'updated_at' => '2018-12-04 03:04:19',
            ),
            435 => 
            array (
                'id' => 936,
                'name' => 'International politics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:19',
                'updated_at' => '2018-12-04 03:04:19',
            ),
            436 => 
            array (
                'id' => 937,
                'name' => 'Natural language',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:19',
                'updated_at' => '2018-12-04 03:04:19',
            ),
            437 => 
            array (
                'id' => 938,
                'name' => 'Neoliberalism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:19',
                'updated_at' => '2018-12-04 03:04:19',
            ),
            438 => 
            array (
                'id' => 939,
            'name' => 'Power (social and political)',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:19',
                'updated_at' => '2018-12-04 03:04:19',
            ),
            439 => 
            array (
                'id' => 940,
                'name' => 'Hegemony',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:19',
                'updated_at' => '2018-12-04 03:04:19',
            ),
            440 => 
            array (
                'id' => 941,
                'name' => 'Politics of the United States',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:19',
                'updated_at' => '2018-12-04 03:04:19',
            ),
            441 => 
            array (
                'id' => 942,
                'name' => 'Foreign policy of the United States',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:20',
                'updated_at' => '2018-12-04 03:04:20',
            ),
            442 => 
            array (
                'id' => 943,
                'name' => 'Gulf War',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:20',
                'updated_at' => '2018-12-04 03:04:20',
            ),
            443 => 
            array (
                'id' => 944,
                'name' => 'Political science',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:21',
                'updated_at' => '2018-12-04 03:04:21',
            ),
            444 => 
            array (
                'id' => 945,
                'name' => 'Mass media',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:21',
                'updated_at' => '2018-12-04 03:04:21',
            ),
            445 => 
            array (
                'id' => 946,
                'name' => 'Cultural critic',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:22',
                'updated_at' => '2018-12-04 03:04:22',
            ),
            446 => 
            array (
                'id' => 947,
                'name' => 'Social criticism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:22',
                'updated_at' => '2018-12-04 03:04:22',
            ),
            447 => 
            array (
                'id' => 948,
                'name' => 'Edmund Husserl',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:22',
                'updated_at' => '2018-12-04 03:04:22',
            ),
            448 => 
            array (
                'id' => 949,
                'name' => 'Epistolary literature',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:22',
                'updated_at' => '2018-12-04 03:04:22',
            ),
            449 => 
            array (
                'id' => 950,
                'name' => 'J. L. Austin',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:22',
                'updated_at' => '2018-12-04 03:04:22',
            ),
            450 => 
            array (
                'id' => 951,
                'name' => 'Archive',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:23',
                'updated_at' => '2018-12-04 03:04:23',
            ),
            451 => 
            array (
                'id' => 952,
            'name' => 'Spectacle (critical theory)',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:23',
                'updated_at' => '2018-12-04 03:04:23',
            ),
            452 => 
            array (
                'id' => 953,
                'name' => 'Culture',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:23',
                'updated_at' => '2018-12-04 03:04:23',
            ),
            453 => 
            array (
                'id' => 954,
                'name' => 'Teleology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:24',
                'updated_at' => '2018-12-04 03:04:24',
            ),
            454 => 
            array (
                'id' => 955,
                'name' => 'Reductionism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:24',
                'updated_at' => '2018-12-04 03:04:24',
            ),
            455 => 
            array (
                'id' => 956,
                'name' => 'Mind-body problem',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:24',
                'updated_at' => '2018-12-04 03:04:24',
            ),
            456 => 
            array (
                'id' => 957,
                'name' => 'Materialism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:24',
                'updated_at' => '2018-12-04 03:04:24',
            ),
            457 => 
            array (
                'id' => 958,
                'name' => 'Consciousness',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:24',
                'updated_at' => '2018-12-04 03:04:24',
            ),
            458 => 
            array (
                'id' => 959,
                'name' => 'Philosophy of physics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:25',
                'updated_at' => '2018-12-04 03:04:25',
            ),
            459 => 
            array (
                'id' => 960,
                'name' => 'Animal rights',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:25',
                'updated_at' => '2018-12-04 03:04:25',
            ),
            460 => 
            array (
                'id' => 961,
                'name' => 'Rationality',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:25',
                'updated_at' => '2018-12-04 03:04:25',
            ),
            461 => 
            array (
                'id' => 962,
                'name' => 'Personal identity',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:26',
                'updated_at' => '2018-12-04 03:04:26',
            ),
            462 => 
            array (
                'id' => 963,
                'name' => 'Humanitarianism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:26',
                'updated_at' => '2018-12-04 03:04:26',
            ),
            463 => 
            array (
                'id' => 964,
                'name' => 'Poverty',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:26',
                'updated_at' => '2018-12-04 03:04:26',
            ),
            464 => 
            array (
                'id' => 965,
            'name' => 'Charity (practice)',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:26',
                'updated_at' => '2018-12-04 03:04:26',
            ),
            465 => 
            array (
                'id' => 966,
                'name' => 'Fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:26',
                'updated_at' => '2018-12-04 03:04:26',
            ),
            466 => 
            array (
                'id' => 967,
                'name' => 'Normative ethics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:26',
                'updated_at' => '2018-12-04 03:04:26',
            ),
            467 => 
            array (
                'id' => 968,
                'name' => 'Globalization',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:27',
                'updated_at' => '2018-12-04 03:04:27',
            ),
            468 => 
            array (
                'id' => 969,
                'name' => 'September 11 attacks',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:27',
                'updated_at' => '2018-12-04 03:04:27',
            ),
            469 => 
            array (
                'id' => 970,
                'name' => 'Krzysztof Kieślowski',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:27',
                'updated_at' => '2018-12-04 03:04:27',
            ),
            470 => 
            array (
                'id' => 971,
                'name' => 'Ideology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:27',
                'updated_at' => '2018-12-04 03:04:27',
            ),
            471 => 
            array (
                'id' => 972,
                'name' => 'Relationship between religion and science',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:27',
                'updated_at' => '2018-12-04 03:04:27',
            ),
            472 => 
            array (
                'id' => 973,
                'name' => 'Economic inequality',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:27',
                'updated_at' => '2018-12-04 03:04:27',
            ),
            473 => 
            array (
                'id' => 974,
                'name' => 'Social science',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:28',
                'updated_at' => '2018-12-04 03:04:28',
            ),
            474 => 
            array (
                'id' => 975,
                'name' => 'Gender',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:28',
                'updated_at' => '2018-12-04 03:04:28',
            ),
            475 => 
            array (
                'id' => 976,
                'name' => 'Queer theory',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:28',
                'updated_at' => '2018-12-04 03:04:28',
            ),
            476 => 
            array (
                'id' => 977,
                'name' => 'Hegelianism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:28',
                'updated_at' => '2018-12-04 03:04:28',
            ),
            477 => 
            array (
                'id' => 978,
                'name' => 'International relations theory',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:28',
                'updated_at' => '2018-12-04 03:04:28',
            ),
            478 => 
            array (
                'id' => 979,
                'name' => 'Military strategy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:29',
                'updated_at' => '2018-12-04 03:04:29',
            ),
            479 => 
            array (
                'id' => 980,
                'name' => 'Military tactics',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:29',
                'updated_at' => '2018-12-04 03:04:29',
            ),
            480 => 
            array (
                'id' => 981,
                'name' => 'Chinese mythology',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            481 => 
            array (
                'id' => 982,
                'name' => 'Wuxia',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            482 => 
            array (
                'id' => 983,
                'name' => 'Chinese philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            483 => 
            array (
                'id' => 984,
                'name' => 'Advaita Vedanta',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            484 => 
            array (
                'id' => 985,
                'name' => 'Hindu philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            485 => 
            array (
                'id' => 986,
                'name' => 'Advaita',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            486 => 
            array (
                'id' => 987,
                'name' => 'Vedanta',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            487 => 
            array (
                'id' => 988,
                'name' => 'Indian philosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:30',
                'updated_at' => '2018-12-04 03:04:30',
            ),
            488 => 
            array (
                'id' => 989,
                'name' => 'Novella',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:31',
                'updated_at' => '2018-12-04 03:04:31',
            ),
            489 => 
            array (
                'id' => 990,
                'name' => 'Poem',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:31',
                'updated_at' => '2018-12-04 03:04:31',
            ),
            490 => 
            array (
                'id' => 991,
                'name' => 'Nationalist',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:32',
                'updated_at' => '2018-12-04 03:04:32',
            ),
            491 => 
            array (
                'id' => 992,
                'name' => 'Spirituality',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:32',
                'updated_at' => '2018-12-04 03:04:32',
            ),
            492 => 
            array (
                'id' => 993,
                'name' => 'Upanishads',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:32',
                'updated_at' => '2018-12-04 03:04:32',
            ),
            493 => 
            array (
                'id' => 994,
                'name' => 'Dhammapada',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:32',
                'updated_at' => '2018-12-04 03:04:32',
            ),
            494 => 
            array (
                'id' => 995,
                'name' => 'Religious text',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:32',
                'updated_at' => '2018-12-04 03:04:32',
            ),
            495 => 
            array (
                'id' => 996,
                'name' => 'Theosophy',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:32',
                'updated_at' => '2018-12-04 03:04:32',
            ),
            496 => 
            array (
                'id' => 997,
                'name' => 'Nihilism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:33',
                'updated_at' => '2018-12-04 03:04:33',
            ),
            497 => 
            array (
                'id' => 998,
                'name' => 'Short story compilation',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:34',
                'updated_at' => '2018-12-04 03:04:34',
            ),
            498 => 
            array (
                'id' => 999,
                'name' => 'Horror fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:34',
                'updated_at' => '2018-12-04 03:04:34',
            ),
            499 => 
            array (
                'id' => 1000,
                'name' => 'Historical novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:34',
                'updated_at' => '2018-12-04 03:04:34',
            ),
        ));
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'name' => 'Feminist theory',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:34',
                'updated_at' => '2018-12-04 03:04:34',
            ),
            1 => 
            array (
                'id' => 1002,
                'name' => 'Art history',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:34',
                'updated_at' => '2018-12-04 03:04:34',
            ),
            2 => 
            array (
                'id' => 1003,
                'name' => 'Abjection',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:34',
                'updated_at' => '2018-12-04 03:04:34',
            ),
            3 => 
            array (
                'id' => 1004,
                'name' => 'LGBT rights in the United States',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:35',
                'updated_at' => '2018-12-04 03:04:35',
            ),
            4 => 
            array (
                'id' => 1005,
                'name' => 'Feminist novel',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:35',
                'updated_at' => '2018-12-04 03:04:35',
            ),
            5 => 
            array (
                'id' => 1006,
                'name' => 'Feminist science fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:35',
                'updated_at' => '2018-12-04 03:04:35',
            ),
            6 => 
            array (
                'id' => 1007,
                'name' => 'Utopian and dystopian fiction',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:35',
                'updated_at' => '2018-12-04 03:04:35',
            ),
            7 => 
            array (
                'id' => 1008,
                'name' => 'Captivity narrative',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:35',
                'updated_at' => '2018-12-04 03:04:35',
            ),
            8 => 
            array (
                'id' => 1009,
                'name' => 'Women\'s health',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:36',
                'updated_at' => '2018-12-04 03:04:36',
            ),
            9 => 
            array (
                'id' => 1010,
                'name' => 'Christian mysticism',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:36',
                'updated_at' => '2018-12-04 03:04:36',
            ),
            10 => 
            array (
                'id' => 1011,
                'name' => 'Free will',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:36',
                'updated_at' => '2018-12-04 03:04:36',
            ),
            11 => 
            array (
                'id' => 1012,
                'name' => 'Visual arts',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:36',
                'updated_at' => '2018-12-04 03:04:36',
            ),
            12 => 
            array (
                'id' => 1013,
                'name' => 'Applied arts',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:36',
                'updated_at' => '2018-12-04 03:04:36',
            ),
            13 => 
            array (
                'id' => 1014,
                'name' => 'Art',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:37',
                'updated_at' => '2018-12-04 03:04:37',
            ),
            14 => 
            array (
                'id' => 1015,
                'name' => 'Decadent movement',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:37',
                'updated_at' => '2018-12-04 03:04:37',
            ),
            15 => 
            array (
                'id' => 1016,
                'name' => 'Anthropic principle',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:37',
                'updated_at' => '2018-12-04 03:04:37',
            ),
            16 => 
            array (
                'id' => 1017,
                'name' => 'History of Science',
                'type' => 'topic',
                'deleted_at' => NULL,
                'created_at' => '2018-12-04 03:04:38',
                'updated_at' => '2018-12-04 03:04:38',
            ),
        ));
        
        
    }
}