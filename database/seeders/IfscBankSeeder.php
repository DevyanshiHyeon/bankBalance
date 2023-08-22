<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IfscBank;

class IfscBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rawData =  '[
            {
                "_id": "6308aaad20230000e300209a",
                "Bank_Name": "ABHYUDAYA_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300209b",
                "Bank_Name": "ABU_DHABI_COMMERCIAL_BANK"
            },
            {
                "_id": "6308aaad20230000e300209c",
                "Bank_Name": "AKOLA_DISTRICT_CENTRAL_CO-OPERATIVE_BANK"
            },
            {
                "_id": "6308aaad20230000e300209d",
                "Bank_Name": "AKOLA_JANATA_COMMERCIAL_COOPERATIVE_BANK"
            },
            {
                "_id": "6308aaad20230000e300209e",
                "Bank_Name": "ALLAHABAD_BANK"
            },
            {
                "_id": "6308aaad20230000e300209f",
                "Bank_Name": "ALMORA_URBAN_CO-OPERATIVE_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e30020a0",
                "Bank_Name": "ANDHRA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020a1",
                "Bank_Name": "ANDHRA_PRAGATHI_GRAMEENA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020a2",
                "Bank_Name": "APNA_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020a3",
                "Bank_Name": "AUSTRALIA_AND_NEW_ZEALAND_BANKING_GROUP_LIMITED."
            },
            {
                "_id": "6308aaad20230000e30020a4",
                "Bank_Name": "AXIS_BANK"
            },
            {
                "_id": "6308aaad20230000e30020a5",
                "Bank_Name": "BANK_INTERNASIONAL_INDONESIA"
            },
            {
                "_id": "6308aaad20230000e30020a6",
                "Bank_Name": "BANK_OF_AMERICA"
            },
            {
                "_id": "6308aaad20230000e30020a7",
                "Bank_Name": "BANK_OF_BAHRAIN_AND_KUWAIT"
            },
            {
                "_id": "6308aaad20230000e30020a8",
                "Bank_Name": "BANK_OF_BARODA"
            },
            {
                "_id": "6308aaad20230000e30020a9",
                "Bank_Name": "BANK_OF_CEYLON"
            },
            {
                "_id": "6308aaad20230000e30020aa",
                "Bank_Name": "BANK_OF_INDIA"
            },
            {
                "_id": "6308aaad20230000e30020ab",
                "Bank_Name": "BANK_OF_MAHARASHTRA"
            },
            {
                "_id": "6308aaad20230000e30020ac",
                "Bank_Name": "BANK_OF_TOKYO-MITSUBISHI_UFJ_LTD."
            },
            {
                "_id": "6308aaad20230000e30020ad",
                "Bank_Name": "BARCLAYS_BANK_PLC"
            },
            {
                "_id": "6308aaad20230000e30020ae",
                "Bank_Name": "BASSEIN_CATHOLIC_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020af",
                "Bank_Name": "BHARATIYA_MAHILA_BANK_LIMITED"
            },
            {
                "_id": "6308aaad20230000e30020b0",
                "Bank_Name": "BNP_PARIBAS"
            },
            {
                "_id": "6308aaad20230000e30020b1",
                "Bank_Name": "CALYON_BANK"
            },
            {
                "_id": "6308aaad20230000e30020b2",
                "Bank_Name": "CANARA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020b3",
                "Bank_Name": "CAPITAL_LOCAL_AREA_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e30020b4",
                "Bank_Name": "CATHOLIC_SYRIAN_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e30020b5",
                "Bank_Name": "CENTRAL_BANK_OF_INDIA"
            },
            {
                "_id": "6308aaad20230000e30020b6",
                "Bank_Name": "CHINATRUST_COMMERCIAL_BANK"
            },
            {
                "_id": "6308aaad20230000e30020b7",
                "Bank_Name": "CITIBANK_NA"
            },
            {
                "_id": "6308aaad20230000e30020b8",
                "Bank_Name": "CITIZENCREDIT_CO-OPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020b9",
                "Bank_Name": "CITY_UNION_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020ba",
                "Bank_Name": "COMMONWEALTH_BANK_OF_AUSTRALIA"
            },
            {
                "_id": "6308aaad20230000e30020bb",
                "Bank_Name": "CORPORATION_BANK"
            },
            {
                "_id": "6308aaad20230000e30020bc",
                "Bank_Name": "CREDIT_SUISSE_AG"
            },
            {
                "_id": "6308aaad20230000e30020bd",
                "Bank_Name": "DBS_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020be",
                "Bank_Name": "DENA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020bf",
                "Bank_Name": "DEUTSCHE_BANK"
            },
            {
                "_id": "6308aaad20230000e30020c0",
                "Bank_Name": "DEVELOPMENT_CREDIT_BANK_LIMITED"
            },
            {
                "_id": "6308aaad20230000e30020c1",
                "Bank_Name": "DHANLAXMI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020c2",
                "Bank_Name": "DICGC"
            },
            {
                "_id": "6308aaad20230000e30020c3",
                "Bank_Name": "DOMBIVLI_NAGARI_SAHAKARI_BANK_LIMITED"
            },
            {
                "_id": "6308aaad20230000e30020c4",
                "Bank_Name": "FIRSTRAND_BANK_LIMITED"
            },
            {
                "_id": "6308aaad20230000e30020c5",
                "Bank_Name": "GOPINATH_PATIL_PARSIK_JANATA_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020c6",
                "Bank_Name": "GURGAON_GRAMIN_BANK"
            },
            {
                "_id": "6308aaad20230000e30020c7",
                "Bank_Name": "HDFC_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020c8",
                "Bank_Name": "HSBC"
            },
            {
                "_id": "6308aaad20230000e30020c9",
                "Bank_Name": "ICICI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020ca",
                "Bank_Name": "IDBI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020cb",
                "Bank_Name": "IDRBT"
            },
            {
                "_id": "6308aaad20230000e30020cc",
                "Bank_Name": "INDIAN_BANK"
            },
            {
                "_id": "6308aaad20230000e30020cd",
                "Bank_Name": "INDIAN_OVERSEAS_BANK"
            },
            {
                "_id": "6308aaad20230000e30020ce",
                "Bank_Name": "INDUSTRIAL_AND_COMMERCIAL_BANK_OF_CHINA_LIMITED"
            },
            {
                "_id": "6308aaad20230000e30020cf",
                "Bank_Name": "INDUSIND_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020d0",
                "Bank_Name": "ING_VYSYA_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020d1",
                "Bank_Name": "JALGAON_JANATA_SAHKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020d2",
                "Bank_Name": "JANAKALYAN_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020d3",
                "Bank_Name": "JANASEVA_SAHAKARI_BANK_LTD._PUNE"
            },
            {
                "_id": "6308aaad20230000e30020d4",
                "Bank_Name": "JANASEVA_SAHAKARI_BANK_(BORIVLI)_LTD"
            },
            {
                "_id": "6308aaad20230000e30020d5",
                "Bank_Name": "JANATA_SAHAKARI_BANK_LTD_(PUNE)"
            },
            {
                "_id": "6308aaad20230000e30020d6",
                "Bank_Name": "JPMORGAN_CHASE_BANK_N.A"
            },
            {
                "_id": "6308aaad20230000e30020d7",
                "Bank_Name": "KALLAPPANNA_AWADE_ICH_JANATA_S_BANK"
            },
            {
                "_id": "6308aaad20230000e30020d8",
                "Bank_Name": "KAPOL_CO_OP_BANK"
            },
            {
                "_id": "6308aaad20230000e30020d9",
                "Bank_Name": "KARNATAKA_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020da",
                "Bank_Name": "KARNATAKA_VIKAS_GRAMEENA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020db",
                "Bank_Name": "KARUR_VYSYA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020dc",
                "Bank_Name": "KOTAK_MAHINDRA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020dd",
                "Bank_Name": "KURMANCHAL_NAGAR_SAHKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020de",
                "Bank_Name": "MAHANAGAR_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020df",
                "Bank_Name": "MAHARASHTRA_STATE_CO_OPERATIVE_BANK"
            },
            {
                "_id": "6308aaad20230000e30020e0",
                "Bank_Name": "MASHREQBANK_PSC"
            },
            {
                "_id": "6308aaad20230000e30020e1",
                "Bank_Name": "MIZUHO_CORPORATE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020e2",
                "Bank_Name": "MUMBAI_DISTRICT_CENTRAL_CO-OP._BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e30020e3",
                "Bank_Name": "NAGPUR_NAGRIK_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020e4",
                "Bank_Name": "NATIONAL_AUSTRALIA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020e5",
                "Bank_Name": "NEW_INDIA_CO-OPERATIVE_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e30020e6",
                "Bank_Name": "NKGSB_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020e7",
                "Bank_Name": "NORTH_MALABAR_GRAMIN_BANK"
            },
            {
                "_id": "6308aaad20230000e30020e8",
                "Bank_Name": "NUTAN_NAGARIK_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020e9",
                "Bank_Name": "OMAN_INTERNATIONAL_BANK_SAOG"
            },
            {
                "_id": "6308aaad20230000e30020ea",
                "Bank_Name": "ORIENTAL_BANK_OF_COMMERCE"
            },
            {
                "_id": "6308aaad20230000e30020eb",
                "Bank_Name": "PARSIK_JANATA_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020ec",
                "Bank_Name": "PRATHAMA_BANK"
            },
            {
                "_id": "6308aaad20230000e30020ed",
                "Bank_Name": "PRIME_CO_OPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020ee",
                "Bank_Name": "PUNJAB_AND_MAHARASHTRA_CO-OP_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e30020ef",
                "Bank_Name": "PUNJAB_AND_SIND_BANK"
            },
            {
                "_id": "6308aaad20230000e30020f0",
                "Bank_Name": "PUNJAB_NATIONAL_BANK"
            },
            {
                "_id": "6308aaad20230000e30020f1",
                "Bank_Name": "RABOBANK_INTERNATIONAL_(CCRB)"
            },
            {
                "_id": "6308aaad20230000e30020f2",
                "Bank_Name": "RAJGURUNAGAR_SAHAKARI_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e30020f3",
                "Bank_Name": "RAJKOT_NAGARIK_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020f4",
                "Bank_Name": "RESERVE_BANK_OF_INDIA"
            },
            {
                "_id": "6308aaad20230000e30020f5",
                "Bank_Name": "SBERBANK"
            },
            {
                "_id": "6308aaad20230000e30020f6",
                "Bank_Name": "SHINHAN_BANK"
            },
            {
                "_id": "6308aaad20230000e30020f7",
                "Bank_Name": "SHRI_CHHATRAPATI_RAJARSHI_SHAHU_URBAN_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e30020f8",
                "Bank_Name": "SOCIETE_GENERALE"
            },
            {
                "_id": "6308aaad20230000e30020f9",
                "Bank_Name": "SOLAPUR_JANATA_SAHKARI_BANK_LTD.SOLAPUR"
            },
            {
                "_id": "6308aaad20230000e30020fa",
                "Bank_Name": "SOUTH_INDIAN_BANK"
            },
            {
                "_id": "6308aaad20230000e30020fb",
                "Bank_Name": "STANDARD_CHARTERED_BANK"
            },
            {
                "_id": "6308aaad20230000e30020fc",
                "Bank_Name": "STATE_BANK_OF_BIKANER_AND_JAIPUR"
            },
            {
                "_id": "6308aaad20230000e30020fd",
                "Bank_Name": "STATE_BANK_OF_HYDERABAD"
            },
            {
                "_id": "6308aaad20230000e30020fe",
                "Bank_Name": "STATE_BANK_OF_INDIA"
            },
            {
                "_id": "6308aaad20230000e30020ff",
                "Bank_Name": "STATE_BANK_OF_MAURITIUS_LTD"
            },
            {
                "_id": "6308aaad20230000e3002100",
                "Bank_Name": "STATE_BANK_OF_MYSORE"
            },
            {
                "_id": "6308aaad20230000e3002101",
                "Bank_Name": "STATE_BANK_OF_PATIALA"
            },
            {
                "_id": "6308aaad20230000e3002102",
                "Bank_Name": "STATE_BANK_OF_TRAVANCORE"
            },
            {
                "_id": "6308aaad20230000e3002103",
                "Bank_Name": "SUMITOMO_MITSUI_BANKING_CORPORATION"
            },
            {
                "_id": "6308aaad20230000e3002104",
                "Bank_Name": "SYNDICATE_BANK"
            },
            {
                "_id": "6308aaad20230000e3002105",
                "Bank_Name": "TAMILNAD_MERCANTILE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002106",
                "Bank_Name": "THANE_BHARAT_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002107",
                "Bank_Name": "THE_A.P._MAHESH_CO-OP_URBAN_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002108",
                "Bank_Name": "THE_AHMEDABAD_MERCANTILE_CO-OPERATIVE_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002109",
                "Bank_Name": "THE_ANDHRA_PRADESH_STATE_COOP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300210a",
                "Bank_Name": "THE_BANK_OF_NOVA_SCOTIA"
            },
            {
                "_id": "6308aaad20230000e300210b",
                "Bank_Name": "THE_BANK_OF_RAJASTHAN_LTD"
            },
            {
                "_id": "6308aaad20230000e300210c",
                "Bank_Name": "THE_BHARAT_CO-OPERATIVE_BANK_(MUMBAI)_LTD"
            },
            {
                "_id": "6308aaad20230000e300210d",
                "Bank_Name": "THE_COSMOS_CO-OPERATIVE_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e300210e",
                "Bank_Name": "THE_DELHI_STATE_COOPERATIVE_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e300210f",
                "Bank_Name": "THE_FEDERAL_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002110",
                "Bank_Name": "THE_GADCHIROLI_DISTRICT_CENTRAL_COOPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002111",
                "Bank_Name": "THE_GREATER_BOMBAY_CO-OP._BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002112",
                "Bank_Name": "THE_GUJARAT_STATE_CO-OPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002113",
                "Bank_Name": "THE_JALGAON_PEOPLES_CO-OP_BANK"
            },
            {
                "_id": "6308aaad20230000e3002114",
                "Bank_Name": "THE_JAMMU_AND_KASHMIR_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002115",
                "Bank_Name": "THE_KALUPUR_COMMERCIAL_CO._OP._BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002116",
                "Bank_Name": "THE_KALYAN_JANATA_SAHAKARI_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002117",
                "Bank_Name": "THE_KANGRA_CENTRAL_CO-OPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002118",
                "Bank_Name": "THE_KANGRA_COOPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002119",
                "Bank_Name": "THE_KARAD_URBAN_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300211a",
                "Bank_Name": "THE_KARNATAKA_STATE_APEX_COOP._BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e300211b",
                "Bank_Name": "THE_LAKSHMI_VILAS_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300211c",
                "Bank_Name": "THE_MEHSANA_URBAN_COOPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300211d",
                "Bank_Name": "THE_MUNICIPAL_CO_OPERATIVE_BANK_LTD_MUMBAI"
            },
            {
                "_id": "6308aaad20230000e300211e",
                "Bank_Name": "THE_NAINITAL_BANK_LIMITED"
            },
            {
                "_id": "6308aaad20230000e300211f",
                "Bank_Name": "THE_NASIK_MERCHANTS_CO-OP_BANK_LTD.,_NASHIK"
            },
            {
                "_id": "6308aaad20230000e3002120",
                "Bank_Name": "THE_RAJASTHAN_STATE_COOPERATIVE_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002121",
                "Bank_Name": "THE_RATNAKAR_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002122",
                "Bank_Name": "THE_ROYAL_BANK_OF_SCOTLAND_N.V"
            },
            {
                "_id": "6308aaad20230000e3002123",
                "Bank_Name": "THE_SAHEBRAO_DESHMUKH_CO-OP._BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002124",
                "Bank_Name": "THE_SARASWAT_CO-OPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002125",
                "Bank_Name": "THE_SEVA_VIKAS_CO-OPERATIVE_BANK_LTD_(SVB)"
            },
            {
                "_id": "6308aaad20230000e3002126",
                "Bank_Name": "THE_SHAMRAO_VITHAL_CO-OPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002127",
                "Bank_Name": "THE_SURAT_DISTRICT_CO_OPERATIVE_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002128",
                "Bank_Name": "THE_SURAT_PEOPLES_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002129",
                "Bank_Name": "THE_SUTEX_CO.OP._BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e300212a",
                "Bank_Name": "THE_TAMILNADU_STATE_APEX_COOPERATIVE_BANK_LIMITED"
            },
            {
                "_id": "6308aaad20230000e300212b",
                "Bank_Name": "THE_THANE_DISTRICT_CENTRAL_CO-OP_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300212c",
                "Bank_Name": "THE_THANE_JANATA_SAHAKARI_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300212d",
                "Bank_Name": "THE_VARACHHA_CO-OP._BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e300212e",
                "Bank_Name": "THE_VISHWESHWAR_SAHAKARI_BANK_LTD.,PUNE"
            },
            {
                "_id": "6308aaad20230000e300212f",
                "Bank_Name": "THE_WEST_BENGAL_STATE_COOPERATIVE_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e3002130",
                "Bank_Name": "TJSB_SAHAKARI_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002131",
                "Bank_Name": "TUMKUR_GRAIN_MERCHANTS_COOPERATIVE_BANK_LTD.,"
            },
            {
                "_id": "6308aaad20230000e3002132",
                "Bank_Name": "UBS_AG"
            },
            {
                "_id": "6308aaad20230000e3002133",
                "Bank_Name": "UCO_BANK"
            },
            {
                "_id": "6308aaad20230000e3002134",
                "Bank_Name": "UNION_BANK_OF_INDIA"
            },
            {
                "_id": "6308aaad20230000e3002135",
                "Bank_Name": "UNITED_BANK_OF_INDIA"
            },
            {
                "_id": "6308aaad20230000e3002136",
                "Bank_Name": "UNITED_OVERSEAS_BANK"
            },
            {
                "_id": "6308aaad20230000e3002137",
                "Bank_Name": "VASAI_VIKAS_SAHAKARI_BANK_LTD."
            },
            {
                "_id": "6308aaad20230000e3002138",
                "Bank_Name": "VIJAYA_BANK"
            },
            {
                "_id": "6308aaad20230000e3002139",
                "Bank_Name": "WEST_BENGAL_STATE_COOPERATIVE_BANK"
            },
            {
                "_id": "6308aaad20230000e300213a",
                "Bank_Name": "WESTPAC_BANKING_CORPORATION"
            },
            {
                "_id": "6308aaad20230000e300213b",
                "Bank_Name": "WOORI_BANK"
            },
            {
                "_id": "6308aaad20230000e300213c",
                "Bank_Name": "YES_BANK_LTD"
            },
            {
                "_id": "6308aaad20230000e300213d",
                "Bank_Name": "ZILA_SAHKARI_BANK_LTD_GHAZIABAD"
            }
        ]';
        $data = json_decode($rawData, true);
        foreach ($data as $item) {
            IfscBank::create([
                '_id' => $item['_id'],
                'bank_name' => $item['Bank_Name'],
            ]);
        }
    }
}
