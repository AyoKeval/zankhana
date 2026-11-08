<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TblEditorialBoardSeeder extends Seeder
{
    public function run(): void
    {
        $experts = json_decode(<<<'JSON'
        [
            {
                "name": "Dr. Prashant K. Chauhan",
                "board_type": "editorial",
                "designation": "Editor-in-Chief",
                "institution": "Darbar Gopaldas Shikshan Mahavidyalaya, Aliyabada (Jamnagar)",
                "university": "Saurashtra University, Rajkot (Gujarat)",
                "expertise": "Education (Social Science Methodology)",
                "email": "prashant2591984@gmail.com",
                "address": "22/2, Secoter-5, Aarush Township, Jamnagar (Gujarat)-, Pin code: 361120",
                "google_scholar": "https://scholar.google.com/citations?user=QckXbIUAAAAJ&hl=en",
                "researchgate": null,
                "scopus_id": null,
                "other": "Research Guide"
            },
            {
                "name": "Dr. Darshana C. Bosmiya",
                "board_type": "editorial",
                "designation": "Executive Editor-in-Chief",
                "institution": "Shree Vivek Bharti B.Ed. College, Junagadh",
                "university": "Noble University, Junagadh (Gujarat)",
                "expertise": "Education (Commerce Methodology)",
                "email": "darshanabosmiya@gmail.com",
                "address": "12/A, Sonal Apartment, Near- ST Bus Stand, Junagadh (Gujarat)-362001",
                "google_scholar": null,
                "researchgate": "https://www.researchgate.net/profile/Darshana-Bosmiya?ev=hdr_xprf",
                "scopus_id": null,
                "other": "Research Guide"
            },
            {
                "name": "Dr. Vipula V. Vaghela",
                "board_type": "editorial",
                "designation": "Associate Professor",
                "institution": "Shree Shardapeeth Arts, Commerce and College of Education, Dwarka",
                "university": "Bhakta Kavi Narsinh Mehta University, Junagadh (Gujarat)",
                "expertise": "Education (Hindi Methodology)",
                "email": "dr.vipulavaghela@gmail.com",
                "address": "Murlidhar Township, Block No.93/2, Near JalaramTemple, (Gujarat)-Dwarka-361335",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": "Research Guide"
            },
            {
                "name": "Dr. Alpesh G. Nakrani",
                "board_type": "editorial",
                "designation": "Associate Professor",
                "institution": "Smt. J.J. Kundalia Graduate Teacher’s College, Rajkot",
                "university": "Saurashtra University, Rajkot (Gujarat)",
                "expertise": "Education (English Methodology)",
                "email": "alpeshsir@gmail.com",
                "address": "Swayam Bungalow-21, Near- Decora West Hell, Kalavad Road, Rajkot (Gujarat)--360005",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": "https://saurashtrauinversity.academia.edu/AlpeshNakrani"
            },
            {
                "name": "Dr. Madhubhai M. Hirpara",
                "board_type": "editorial",
                "designation": "Rt. Associate Professor",
                "institution": "Darbar Gopaldas Shikshan Mahavidyalaya, Aliyabada (Jamnagar)",
                "university": "Saurashtra University, Rajkot (Gujarat)",
                "expertise": "Education (Gujarati and Sanskrit Methodology)",
                "email": "mmhirpara@gmail.com",
                "address": "B/H Modi School, Mota Mava Road, Rajkot (Gujarat)-360005",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Jalpa Y. Borsaniya",
                "board_type": "editorial",
                "designation": "Assistant Professor",
                "institution": "Shree P.D.M. Graduate College of Education, Rajkot",
                "university": "Saurashtra University, Rajkot (Gujarat)",
                "expertise": "Education (Hindi Methodology)",
                "email": "jalpayb83@gmail.com",
                "address": "201, Second Floor, Dwarka Prima Apartment, Near- HJ Doshi Hospital Road. Old Papaya Wadi Street Number 1, Rajkot (Gujarat)-360005",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Dipak Chavda",
                "board_type": "overseas",
                "designation": "Associate Professor",
                "institution": "Department of Education, Kachchh",
                "university": "Shyamji Krishna Varma Kachchh University, Kachchh (Gujarat)",
                "expertise": "Education (Research Methodology)",
                "email": "drdipakchavda@kskvku.ac.in",
                "address": "‘Raidas, Plot No. 9-C, Street-1, Near- JIO Tower, Junagadh (Gujarat)-362001",
                "google_scholar": "drdipakchavda@kskvku.ac.in",
                "researchgate": null,
                "scopus_id": null,
                "other": "Research Guide"
            },
            {
                "name": "Dr. Ankita Suvagiya",
                "board_type": "overseas",
                "designation": "Head and Assistant Professor",
                "institution": "Noble University, Junagadh",
                "university": "Noble University, Junagadh (Gujarat)",
                "expertise": "Microbiology",
                "email": "ankitamicro1627@gmail.com",
                "address": "102, Saffron apartment, Gokuldham society, Zanzarda Road, Junagadh (Gujarat)-362001",
                "google_scholar": "https://www.google.com/sorry/index?continue=https://scholar.google.com/citations%3Fuser%3DUiEXM1gAAAAJ%26hl%3Den&hl=en&q=EgSYOw9oGOz78NYGIi54-7nwOXSL8hO1JO3XhVCOns0dXWcl69lz5SbjvOIhQqlNir86bRcYWnp1FetMgJyUloBQ2DVvsWigrKTgyI",
                "researchgate": "https://www.researchgate.net/profile/Ankita_Suvagiya",
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Haresh Bambhaniya",
                "board_type": "overseas",
                "designation": "Assistant Professor",
                "institution": "M.M. Shah College of Education, Vadhwan",
                "university": "Saurashtra University, Rajkot (Gujarat)",
                "expertise": "Education (Science Methodology)",
                "email": "sanidhya.ssc@gmail.com",
                "address": "9, Shivshakti Society, Hathsani Road, Savarkundla (Gujarat)-364515",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Jignesh Gohil",
                "board_type": "overseas",
                "designation": "Assistant Professor",
                "institution": "M.M. Shah College of Education, Vadhwan",
                "university": "Saurashtra University, Rajkot (Gujarat)",
                "expertise": "Education (English Methodology)",
                "email": "prashant2591984@gmail.com",
                "address": "Near- Upasana circle, Surendranagar (Gujarat)-363001",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Sangita Bakotra",
                "board_type": "advisory",
                "designation": "Assistant Professor & HOD",
                "institution": "Department of History, Shri and Smt. P K Kotawala arts college, Patan",
                "university": "H.N.G. University, Patan (Gujarat)",
                "expertise": "History",
                "email": "sangitabakotra@yahoo.in",
                "address": "29/ A, Shukan Bungalows, Upavan Road, Patan (Gujarat)-384265",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": "Research Guide"
            },
            {
                "name": "Dr. Dushyant Algotar",
                "board_type": "advisory",
                "designation": "Assistant Professor",
                "institution": "Shree C.H. Shah Maitri Vidyapeeth Mahila College, Surendranagar",
                "university": "Saurashtra University, Rajkot (Gujarat)",
                "expertise": "Commerce and Education (Commerce Methodology)",
                "email": "drdushyantalgotar@gmail.com",
                "address": "21 Dhanyata Society, Opp. Seema Hall, Besides Harivilla Raw House, Ahmedabad (Gujarat)-380015",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Dipal Dave",
                "board_type": "advisory",
                "designation": "Assistant Professor",
                "institution": "N.H. Patel College of Education",
                "university": "Sardar Patel University, Anand (Gujarat)",
                "expertise": "Sanskrit Literature and Education (Sanskrit Methodology)",
                "email": "dipalvyas259@gmail.com",
                "address": "14 Indra residency near navjivan hospital 100 ft, Anand (Gujarat)-388001",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": "Research Guide"
            },
            {
                "name": "Dr. Rajnikant Dodiya",
                "board_type": "review",
                "designation": "Assistant Professor",
                "institution": "H M Patel Institute of English Training and Research, Vallabh Vidyanagar",
                "university": "Sardar Patel University, Anand (Gujarat)",
                "expertise": "English Literature and Education (English Methodology)",
                "email": "rajnikantdodiya2@gmail.com",
                "address": "PO Box No. 32, H M Patel Institute of English Training and Research, Vallabh Vidyanagar, Anand (Gujarat)-388120",
                "google_scholar": "https://scholar.google.com/citations?hl=en&user=X92BI1AAAAAJ",
                "researchgate": "https://www.researchgate.net/profile/Rajnikant-Dodiya",
                "scopus_id": null,
                "other": {
                    "ugc_vidwan": "https://vidwan.inflibnet.ac.in/profile/655426",
                    "orcid": "https://orcid.org/0009-0001-8558-4839"
                }
            },
            {
                "name": "Dr. Nikunj Vyas",
                "board_type": "review",
                "designation": "Assistant Professor (GES-II)",
                "institution": "Government B.Ed. College, Vansda",
                "university": "Veer Narmad South Gujarat University, Surat",
                "expertise": "Education (English Methodology)",
                "email": "nikunjbvyas@gmail.com",
                "address": "Hanumanbari, Vansda Dist-Navsari (Gujarat)-396580",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Deepak Macwan",
                "board_type": "review",
                "designation": "Special Educator",
                "institution": "Toronto School Board",
                "university": null,
                "expertise": "Special Education",
                "email": "dipak.macwan2016@gmail.com",
                "address": "40 Tuxedo Court, Scarborough, Ontario, Canada",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Shivali Bhatt",
                "board_type": "review",
                "designation": "Teacher",
                "institution": "Przedszkole, Nr 1 “Łamigłówka”, Poland",
                "university": "Polski Instytut Montessori, Warszawa",
                "expertise": "English Literature and Montessori Education",
                "email": "shivalizeal45@gmail.com",
                "address": "Ul. Przedszkolna 1, 62-070 Dąbrowa (Gmina Dopiewo). Poland",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Mayurdhvajsinh Zala",
                "board_type": "review",
                "designation": "Sports Teacher",
                "institution": "Shree N.D.H. High School, Dwarka",
                "university": null,
                "expertise": "Physical & Sports Education",
                "email": "jhala2611@gmail.com",
                "address": "“Balbhuvan, Harshadnagar, Near- Dr. Subhash Academy, Junagadh (Gujarat)-362037",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            },
            {
                "name": "Dr. Vijaykumar Algotar",
                "board_type": "review",
                "designation": "Assistant Professor",
                "institution": "G.B.Parmar College Of Computer Science And Management, Surendranagar",
                "university": "Saurashtra University, Rajkot",
                "expertise": "Physical Education",
                "email": "algotarvijay@gmail.com",
                "address": "Aadiraj bunglow no 4, shantinagar 2, jamnagar road, ghanteshwar, Rajkot (Gujarat) - 360006",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": "Research Guide"
            },
            {
                "name": "Dr. Omprakash Singh",
                "board_type": "other",
                "designation": "Assistant Professor",
                "institution": "S. P. Jain College, Sasaram",
                "university": "Veer Kunwar Singh University, Bihar",
                "expertise": "Botani (Cytogenetics)",
                "email": "omprakash080283@gmail.com",
                "address": "Q.N. J/28, Dalmianagar, Rohtas (Bihar)-821305",
                "google_scholar": null,
                "researchgate": null,
                "scopus_id": null,
                "other": null
            }
        ]
        JSON, true);

        $now = now();


        $rows = array_map(function ($expert) use ($now) {

            if (is_array($expert['other'] ?? null)) {
                $expert['other'] = implode(', ', array_map(
                    fn($key, $value) => "$key: $value",
                    array_keys($expert['other']),
                    $expert['other']
                ));
            }

            return array_merge($expert, [
                'is_active' => 1,
                'is_del' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

        }, $experts);

        DB::table('tbl_editorial_board')->insert($rows);

    }
}
