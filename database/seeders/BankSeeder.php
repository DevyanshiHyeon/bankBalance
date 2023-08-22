<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rawData =  '[
            {
                "_id": "63858926d34a3f90a908dd37",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/axis_bank.png",
                "colour": "AE285D",
                "Bank_Name": "Axis Bank",
                "toll_free_num":"18004195959",
                "mini_stat_num":"18004196969",
                "mini_stat_sms":"0",
                "cust_care_num":"18604195555",
                "sms_inquiry":"0",
                "net_banking_url":"https://retail.axisbank.co.in/"
            },
            {
                "_id": "63858926d34a3f90a908dd39",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/dena_bank.png",
                "colour": "005BAA",
                "Bank_Name": "Dena Bank",
                "toll_free_num":"09289356677",
                "mini_stat_num":"09278656677",
                "mini_stat_sms":"0",
                "cust_care_num":"18002336427",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.bankofbaroda.in/"
            },
            {
                "_id": "63858926d34a3f90a908dd3a",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/state_bank_of_india.png",
                "colour": "005BAA",
                "Bank_Name": "State Bank of India",
                "toll_free_num":"09223766666",
                "mini_stat_num":"09223866666",
                "mini_stat_sms":"0",
                "cust_care_num":"18004253800",
                "sms_inquiry":"0",
                "net_banking_url":"https://retail.onlinesbi.com/retail/login.htm"
            },
            {
                "_id": "63858926d34a3f90a908dd3d",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/bank_of_india.png",
                "colour": "007DC5",
                "Bank_Name": "Bank of India",
                "toll_free_num":"09015135135",
                "mini_stat_num":"9810558585",
                "mini_stat_sms":"Send SMS TRANS <SMSPassword> to 9810558585 #E.g. TRANS 1111 to 9810558585",
                "cust_care_num":"1800220229",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.bankofindia.co.in/"
            },
            {
                "_id": "63858926d34a3f90a908dd3e",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/idbi_bank.png",
                "colour": "F58220",
                "Bank_Name": "IDBI Bank",
                "toll_free_num":"18008431122",
                "mini_stat_num":"18008431133",
                "mini_stat_sms":"0",
                "cust_care_num":"18002094324",
                "sms_inquiry":"0",
                "net_banking_url":"https://inet.idbibank.co.in/"
            },
            {
                "_id": "63858926d34a3f90a908dd3f",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/uco_bank.png",
                "colour": "0044AA",
                "Bank_Name": "UCO Bank",
                "toll_free_num":"09278792787",
                "mini_stat_num":"09213125125",
                "mini_stat_sms":"0",
                "cust_care_num":"18002740123",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.ucobank.com/english/register-ebanking.aspx"
            },
            {
                "_id": "63858926d34a3f90a908dd40",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/kotak_mahindra_bank.png",
                "colour": "EC1C23",
                "Bank_Name": "Kotak Mahindra Bank",
                "toll_free_num":"18002740110",
                "mini_stat_num":"9971056767",
                "mini_stat_sms":"Send SMS TXN <Last 4 digits of Account Number> to 9971056767 #E.g. TXN 6895 to 9971056767",
                "cust_care_num":"18602662666",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.kotak.com"
            },
            {
                "_id": "63858926d34a3f90a908dd41",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/panjab_national_bank.png",
                "colour": "A20E37",
                "Bank_Name": "Punjab National Bank",
                "toll_free_num":"18001802223",
                "mini_stat_num":"5607040",
                "mini_stat_sms":"Send SMS MINSTMT  <16 digit Account Number> to 5607040 #E.g. MINSTMT 0153001234567890 to 5607040",
                "cust_care_num":"18001802222",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.pnbindia.in/retail-Internet-banking.html"
            },
            {
                "_id": "63858926d34a3f90a908dd42",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/yes_bank.png",
                "colour": "0066B3",
                "Bank_Name": "Yes Bank",
                "toll_free_num":"09223920000",
                "mini_stat_num":"09223921111",
                "mini_stat_sms":"0",
                "cust_care_num":"18001200",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.yesbank.in"
            },
            {
                "_id": "63858926d34a3f90a908dd43",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/canara_bank.png",
                "colour": "339AD5",
                "Bank_Name": "Canara Bank",
                "toll_free_num":"09015483483",
                "mini_stat_num":"09015734734",
                "mini_stat_sms":"0",
                "cust_care_num":"18004250018",
                "sms_inquiry":"0",
                "net_banking_url":"https://online.canarabank.in/?module=login"
            },
            {
                "_id": "63858926d34a3f90a908dd44",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/corporation_bank.png",
                "colour": "00A650",
                "Bank_Name": "Corporation Bank",
                "toll_free_num":"09289792897",
                "mini_stat_num":"5667716",
                "mini_stat_sms":"Send SMS CTRN to 5667716 #E.g. CTRN to 5667716",
                "cust_care_num":"18004253555",
                "sms_inquiry":"0",
                "net_banking_url":"https://corp.onlinesbi.com/corporate/sbi/sbi_home.html"
            },
            {
                "_id": "63858926d34a3f90a908dd45",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/bank_of_baroda.png",
                "colour": "FF5200",
                "Bank_Name": "Bank Of Baroda",
                "toll_free_num":"08468001111",
                "mini_stat_num":"08468001122",
                "mini_stat_sms":"0",
                "cust_care_num":"18001024455",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.bobibanking.com"
            },
            {
                "_id": "63858926d34a3f90a908dd47",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/allahabad_bank.png",
                "colour": "00AEEF",
                "Bank_Name": "Allahabad Bank",
                "toll_free_num":"09224150150",
                "mini_stat_num":"09224150150",
                "mini_stat_sms":"0",
                "cust_care_num":"18005722000",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.netbanking.indianbank.in/jsp/startIBPreview.jsp"
            },
            {
                "_id": "63858926d34a3f90a908dd48",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/hsbc_bank.png",
                "colour": "ED1C24",
                "Bank_Name": "HSBC Bank",
                "toll_free_num":"18001034722",
                "mini_stat_num":"9611124722",
                "mini_stat_sms":"Send SMS MINI <account nickname> to 9611124722 #E.g. MINI NIR to 9611124722",
                "cust_care_num":"18001034722",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.hsbc.co.in"
            },
            {
                "_id": "63858926d34a3f90a908dd3b",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/icici_bank.png",
                "colour": "CB242D",
                "Bank_Name": "ICICI Bank",
                "toll_free_num":"9594612612",
                "mini_stat_num":"9594613613",
                "mini_stat_sms":"0",
                "cust_care_num":"18002003344",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.icicibank.com/Personal-Banking/insta-banking/internet-banking/index.page"
            },
            {
                "_id": "63858926d34a3f90a908dd4a",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/union_bank_of_india.png",
                "colour": "00579C",
                "Bank_Name": "Union Bank of India",
                "toll_free_num":"09223008586",
                "mini_stat_num":"09223008486",
                "mini_stat_sms":"UMNS to 09223008486 #E.g. SMS UMNS to 09223008486",
                "cust_care_num":"18002082244",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.unionbankonline.co.in"
            },
            {
                "_id": "63858926d34a3f90a908dd4b",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/central_bank_of_india.png",
                "colour": "D71920",
                "Bank_Name": "Central Bank of India",
                "toll_free_num":"09555244442",
                "mini_stat_num":"09555144441",
                "mini_stat_sms":"0",
                "cust_care_num":"1800221911",
                "sms_inquiry":"0",
                "net_banking_url":"https://centralbank.net.in"
            },
            {
                "_id": "63858926d34a3f90a908dd4c",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/andhra_bank.png",
                "colour": "0E3192",
                "Bank_Name": "Andhra Bank",
                "toll_free_num":"09223011300",
                "mini_stat_num":"9223173924",
                "mini_stat_sms":"Send SMS MINI <MPIN> to 9223173924 #E.g. MINI 4444 to 9223173924",
                "cust_care_num":"18004251515",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.unionbankofindia.co.in/english/internet-banking.aspx"
            },
            {
                "_id": "63858926d34a3f90a908dd4d",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/indian_bank.png",
                "colour": "0C419A",
                "Bank_Name": "Indian Bank",
                "toll_free_num":"09289592895",
                "mini_stat_num":"9444394443",
                "mini_stat_sms":"Send SMS LATRAN <Account No> <MPIN> to 9444394443 #E.g. LATRAN 989898989 5555 to 9444394443",
                "cust_care_num":"180042500000",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.netbanking.indianbank.in/jsp/startIBPreview.jsp"
            },
            {
                "_id": "63858926d34a3f90a908dd3c",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/hdfc_bank.png",
                "colour": "ED232A",
                "Bank_Name": "HDFC Bank",
                "toll_free_num":"18002703333",
                "mini_stat_num":"18002703355",
                "mini_stat_sms":"0",
                "cust_care_num":"18602676161",
                "sms_inquiry":"0",
                "net_banking_url":"https://netbanking.hdfcbank.com"
            },
            {
                "_id": "63858926d34a3f90a908dd4f",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/united_bank_of_india.png",
                "colour": "009849",
                "Bank_Name": "United Bank Of India",
                "toll_free_num":"09015431345",
                "mini_stat_num":"9223173933",
                "mini_stat_sms":"Send SMS MINI <MPIN> to 9223173933 #E.g. MINI 5555 to 9223173933",
                "cust_care_num":"18003450345",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.bankwithunited.com/online-banking.html"
            },
            {
                "_id": "63858926d34a3f90a908dd51",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/deutsche_bank.png",
                "colour": "292B7A",
                "Bank_Name": "Deutsche Bank",
                "toll_free_num":"18001236601",
                "mini_stat_num":"561615",
                "mini_stat_sms":"Send SMS TSA <last 4 digits of a/c> to 561615 #E.g. TSA 3456 to 561615",
                "cust_care_num":"18602666601",
                "sms_inquiry":"0",
                "net_banking_url":"https://login.deutschebank.co.in"
            },
            {
                "_id": "63858926d34a3f90a908dd55",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/vijaya_bank.png",
                "colour": "D42027",
                "Bank_Name": "Vijaya Bank",
                "toll_free_num":"18001035525",
                "mini_stat_num":"18001035535",
                "mini_stat_sms":"0",
                "cust_care_num":"18004255885",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.bankofbaroda.in/personal-banking/digital-products/instant-banking/bob-world-internet-banking"
            },
            {
                "_id": "63858926d34a3f90a908dd57",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/barclays_bank.png",
                "colour": "2EACE3",
                "Bank_Name": "Barclays Bank",
                "toll_free_num":"02260007888",
                "mini_stat_num":"NA",
                "mini_stat_sms":"NA",
                "cust_care_num":"02260007888",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.netbanking.barclays.in/B002/login.jsp"
            },
            {
                "_id": "63858926d34a3f90a908dd58",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/bhartiya_mahila_bank.png",
                "colour": "E92E28",
                "Bank_Name": "Bharatiya Mahila Bank",
                "toll_free_num":"9212438888",
                "mini_stat_num":"9212438888",
                "mini_stat_sms":"0",
                "cust_care_num":"1147472100",
                "sms_inquiry":"0",
                "net_banking_url":"https://retail.onlinesbi.sbi/retail/login.htm"
            },
            {
                "_id": "63858926d34a3f90a908dd5a",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/tamilnad_mercantile_bank.png",
                "colour": "C72E8F",
                "Bank_Name": "Tamilnad Mercantile Bank",
                "toll_free_num":"09211937373",
                "mini_stat_num":"NA",
                "mini_stat_sms":"NA",
                "cust_care_num":"9842461461",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.tmbnet.in"
            },
            {
                "_id": "63858926d34a3f90a908dd5b",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/syndicate_bank.png",
                "colour": "F37322",
                "Bank_Name": "Syndicate Bank",
                "toll_free_num":"09210332255",
                "mini_stat_num":"9210332255",
                "mini_stat_sms":"Send SMS STXN <Customer ID> to 9210332255 #E.g. STXN 123456 to 9210332255",
                "cust_care_num":"180030113333",
                "sms_inquiry":"0",
                "net_banking_url":"https://canarabank.com/NET_Banking.aspx"
            },
            {
                "_id": "63858926d34a3f90a908dd5c",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/dhanlaxmi_bank.png",
                "colour": "540F44",
                "Bank_Name": "Dhanlaxmi Bank",
                "toll_free_num":"08067747700",
                "mini_stat_num":"08067747733",
                "mini_stat_sms":"0",
                "cust_care_num":"04876613000",
                "sms_inquiry":"0",
                "net_banking_url":"https://delight.dhanbank.in/ib-retail-web/tenant/index"
            },
            {
                "_id": "63858926d34a3f90a908dd5d",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/state_bank_of_mysore.png",
                "colour": "00A4Df",
                "Bank_Name": "State Bank of Mysore",
                "toll_free_num":"09223766666",
                "mini_stat_num":"09223866666",
                "mini_stat_sms":"Send SMS MSTMT to 09223866666 #E.g. MSTMT to 09223866666",
                "cust_care_num":"18004252244",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.onlinesbi.com"
            },
            {
                "_id": "63858926d34a3f90a908dd5e",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/bank_of_maharastra.png",
                "colour": "0089CF",
                "Bank_Name": "Bank of Maharashtra",
                "toll_free_num":"18002334526",
                "mini_stat_num":"9223181818",
                "mini_stat_sms":"Send SMS LATRAN <Account No> <MPIN> to 9223181818 #E.g. LATRAN 989898989 5555 to 9223181818",
                "cust_care_num":"18002334526",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.bankofmaharashtra.in"
            },
            {
                "_id": "63858926d34a3f90a908dd5f",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/indusin_bank.png",
                "colour": "98272A",
                "Bank_Name": "IndusInd Bank",
                "toll_free_num":"18002741000",
                "mini_stat_num":"9212299955",
                "mini_stat_sms":"Send SMS MINI to 9212299955 #E.g. Send SMS MINI to 9212299955",
                "cust_care_num":"18605005004",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.indusind.com"
            },
            {
                "_id": "63858926d34a3f90a908dd49",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/south_indian_bank.png",
                "colour": "A91E22",
                "Bank_Name": "South Indian Bank",
                "toll_free_num":"09223008488",
                "mini_stat_num":"9840777222",
                "mini_stat_sms":"Send SMS TRN<Customer PIN> to 9840777222 #E.g. TRN1234 to 9840777222",
                "cust_care_num":"18004251809",
                "sms_inquiry":"0",
                "net_banking_url":"http://southindianbank.com/Login/index.html"
            },
            {
                "_id": "63858926d34a3f90a908dd61",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/oriental_bank_of_commerce.png",
                "colour": "00983D",
                "Bank_Name": "Oriental Bank of Commerce",
                "toll_free_num":"08067205757",
                "mini_stat_num":"08067205767",
                "mini_stat_sms":"0",
                "cust_care_num":"18001801235",
                "sms_inquiry":"0",
                "net_banking_url":"https://pnbibanking.in/"
            },
            {
                "_id": "63858926d34a3f90a908dd62",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/state_bank_of_hydrabad.png",
                "colour": "0066FF",
                "Bank_Name": "State Bank of Hyderabad",
                "toll_free_num":"09223766666",
                "mini_stat_num":"09223866666",
                "mini_stat_sms":"0",
                "cust_care_num":"18004251825",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.onlinesbi.com"
            },
            {
                "_id": "63858926d34a3f90a908dd66",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/state_bank_of_travancore.png",
                "colour": "00A4DF",
                "Bank_Name": "State Bank of Travancore",
                "toll_free_num":"09223766666",
                "mini_stat_num":"09223866666",
                "mini_stat_sms":"0",
                "cust_care_num":"18004253800",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.onlinesbi.com"
            },
            {
                "_id": "63858926d34a3f90a908dd4e",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/indian_overseas_bank.png",
                "colour": "013CC8",
                "Bank_Name": "Indian Overseas Bank",
                "toll_free_num":"04442220004",
                "mini_stat_num":"8424022122",
                "mini_stat_sms":"Send SMS MINI <Last 4 digits of Account Number> to 8424022122 #E.g. MINI 6895 to 8424022122",
                "cust_care_num":"18004254445",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.iobnet.co.in/ibanking/login.do"
            },
            {
                "_id": "63858926d34a3f90a908dd6b",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/karnataka_bank.png",
                "colour": "873D94",
                "Bank_Name": "Karnataka Bank",
                "toll_free_num":"18004251445",
                "mini_stat_num":"18004251446",
                "mini_stat_sms":"0",
                "cust_care_num":"18004251444",
                "sms_inquiry":"0",
                "net_banking_url":"https://karnatakabank.com/personal/internet-banking"
            },
            {
                "_id": "63858926d34a3f90a908dd6c",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/karur_vysys_bank.png",
                "colour": "00854A",
                "Bank_Name": "Karur Vysya Bank",
                "toll_free_num":"09266292666",
                "mini_stat_num":"09266292665",
                "mini_stat_sms":"Send SMS KVBTXN to 9244770000",
                "cust_care_num":"18602581916",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.kvbin.com/B001/ENULogin.jsp"
            },
            {
                "_id": "63858926d34a3f90a908dd74",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/city_union_bank.png",
                "colour": "EB0677",
                "Bank_Name": "CITY UNION BANK",
                "toll_free_num":"9278177444",
                "mini_stat_num":"NA",
                "mini_stat_sms":"NA",
                "cust_care_num":"9278177444",
                "sms_inquiry":"0",
                "net_banking_url":""
            },
            {
                "_id": "63858926d34a3f90a908dd75",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/state_bank_of_patiala.png",
                "colour": "1166DD",
                "Bank_Name": "STATE BANK OF PATIALA",
                "toll_free_num":"09223766666",
                "mini_stat_num":"09223866666",
                "mini_stat_sms":"NA",
                "cust_care_num":"1800112211",
                "sms_inquiry":"0",
                "net_banking_url":"https://retail.onlinesbi.com/personal/"
            },
            {
                "_id": "63858926d34a3f90a908dd78",
                "image": "https://allbankbalance.vasundharaapps.com/bankList/image/andhra_pragati_grameena_bank.png",
                "colour": "03ADFF",
                "Bank_Name": "Andhra Pragathi Grameena Bank",
                "toll_free_num":"09266921358",
                "mini_stat_num":"NA",
                "mini_stat_sms":"NA",
                "cust_care_num":"18004252045",
                "sms_inquiry":"0",
                "net_banking_url":"https://www.apgb.in/Mobile_Banking.php"
            }
        ]';
        $data = json_decode($rawData, true);
        foreach ($data as $item) {
            Bank::create([
                '_id' => $item['_id'],
                'image' => $item['image'],
                'colour' => $item['colour'],
                'Bank_Name' => $item['Bank_Name'],
                'toll_free_num' => $item['toll_free_num'],
                'mini_stat_num' => $item['mini_stat_num'],
                'mini_stat_sms' => $item['mini_stat_sms'],
                'cust_care_num' => $item['cust_care_num'],
                'sms_inquiry' => $item['sms_inquiry'],
                'net_banking_url' => $item['net_banking_url']
            ]);
        }
    }
}
