<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataStaffLive = [
            [
              'id' => '20596',
              'name' => 'ravi',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f8cd2e40-044a-11ee-a8da-f370a1a7661d/16860430542044781451.jpg',
            ],
            [
              'id' => '20399',
              'name' => 'nina',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/05633170-004f-11ee-b84a-19fa97a9924a/0e8a3dee946a99635b3f8ea5df77fca4f0068068.jpg',
            ],
            [
              'id' => '20395',
              'name' => 'hbcdj',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/cb69b980-0042-11ee-a606-2f69d82e69e8/1685600315397450777.jpg',
            ],
            [
              'id' => '19949',
              'name' => 'Michael',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/1dd1b1c0-f548-11ed-b6df-7b566ad71620/16843925601535377862.jpg',
            ],
            [
              'id' => '10610',
              'name' => 'lc',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/713b18d0-79f3-11ed-949f-e5c973be16d2/1670832200917501266.jpg',
            ],
            [
              'id' => '9542',
              'name' => 'dharani_adm',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/9d115120-59c2-11ed-8d6c-8d662bb4d5fb/5b7ab1499d292bdae618e7c316fd1db09c4ede06.jpg',
            ],
            [
              'id' => '9540',
              'name' => 'dharani_man',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/6f086a50-59c2-11ed-9386-a172a367de75/67d55008075c739df0c2777fa01d2eae1ddb8fcb.jpg',
            ],
            [
              'id' => '9538',
              'name' => 'dharani_sup',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/43b34970-59c2-11ed-9c58-714f80d26808/a10dd850e9aa82d0ad862a2dc0bd967b4f9232cb.jpg',
            ],
            [
              'id' => '9536',
              'name' => 'dharani_emp',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/09ec0060-59c2-11ed-9414-5740f2a6b66e/2832d1816a837d62a874c59ab2f516984a6cac83.jpg',
            ],
            [
              'id' => '9492',
              'name' => 'Keiven',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/9bc7cfd0-58ff-11ed-8427-b5a863bcc40e/faa4531b4131bc3e84c10b5b332064ec87f96221.jpg',
            ],
            [
              'id' => '8669',
              'name' => '1040 Blue',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/0050fee0-3efb-11ed-9e05-393b11fb74c7/b79f48d67e74d33c0eca514def262b46e31fb07c.jpg',
            ],
            [
              'id' => '8632',
              'name' => 'MatthewL',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/6937e620-3d9e-11ed-bfb8-8f94d161c02f/22232e6a386d6a82a7e24c947dc62f7ce5809af1.jpg',
            ],
            [
              'id' => '8623',
              'name' => 'tanjinhongwhizzl1',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/aa8d59c0-3d79-11ed-a046-6f980a910ac9/16641848151756578465.jpg',
            ],
            [
              'id' => '8624',
              'name' => 'tanjinhongwhizzl2',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/aaa013f0-3d79-11ed-a8d9-dde8322515d3/16641848591028775831.jpg',
            ],
            [
              'id' => '8625',
              'name' => 'tanjinhongwhizzl3',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/aab29ec0-3d79-11ed-977e-37c4e4d56480/1664184937359994620.jpg',
            ],
            [
              'id' => '8620',
              'name' => 'tanjinhongwhizzladministrator',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/aa51afe0-3d79-11ed-b3b2-a92beaa11ac0/2ee693c55215bc7dd1a528e2011186f9f46bab46.jpg',
            ],
            [
              'id' => '8621',
              'name' => 'tanjinhongwhizzlmanager',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/aa653a60-3d79-11ed-b90b-1d19f4caaa6b/84b9a410e90d1d99c48ef7226aa5f438b7e64126.jpg',
            ],
            [
              'id' => '8622',
              'name' => 'tanjinhongwhizzlsupervisor',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/aa78f870-3d79-11ed-9e5c-137e4f886cdc/55907b8cd144b2bd392a8d2546d591042dc6f3fd.jpg',
            ],
            [
              'id' => '7787',
              'name' => 'Samantha',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/cc4c5060-29c2-11ed-b9fd-874febddeadd/16620152141060339584.jpg',
            ],
            [
              'id' => '7773',
              'name' => 'tanjinhong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/94f10290-29b1-11ed-b13f-0db96d5e9ba6/2616070a302fc44971218bcba6c5f4061f11166b.jpg',
            ],
            [
              'id' => '7253',
              'name' => 'MUHAMMAD NAJMIE BIN NOR AZWAN',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d713c8c0-19f3-11ed-8386-55da2d53f0eb/16602773511747931600.jpg',
            ],
            [
              'id' => '7131',
              'name' => 'nasiruddin',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/4911ad00-16f6-11ed-998d-0f3b22237554/16599482562108083944.jpg',
            ],
            [
              'id' => '6905',
              'name' => 'Andiko',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/da388e90-11a8-11ed-b555-b5ec8c034ba2/1659365243770729723.jpeg',
            ],
            [
              'id' => '6569',
              'name' => 'faleyrazali',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/3cb2e960-0e50-11ed-9091-8b3cc15db892/16589973292036462270.jpeg',
            ],
            [
              'id' => '6568',
              'name' => 'Zalina Satar',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/ca86ffe0-0e46-11ed-a48c-0f094e1421a4/165899327253415044.jpg',
            ],
            [
              'id' => '4900',
              'name' => 'Vincent liew Vun tet',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/ba3c5100-e738-11ec-9d27-e9e35bc794c2/16546991371903538666.jpg',
            ],
            [
              'id' => '4899',
              'name' => 'Agnes',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/a43c1450-e738-11ec-9cef-a5cf332b07f2/16546991001872942586.jpg',
            ],
            [
              'id' => '4898',
              'name' => 'james yew',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/9b9d2e20-e738-11ec-ad11-75192cb76a58/16546990852085953630.jpg',
            ],
            [
              'id' => '4897',
              'name' => 'Chelisa',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/93f85aa0-e737-11ec-862e-7d8a74ff28e3/1654698643283323124.jpg',
            ],
            [
              'id' => '3688',
              'name' => 'khong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d5dbca90-c45d-11ec-ab0e-472ed669e015/16508667842088175352.jpeg',
            ],
            [
              'id' => '2688',
              'name' => 'fatiniazlan',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f7ed37a0-a335-11ec-8833-6bee78747178/16472212721609390150.jpeg',
            ],
            [
              'id' => '2143',
              'name' => 'Vky Lau',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/ed925080-94ad-11ec-a057-5d805b8b0aec/16456235271109911511.jpeg',
            ],
            [
              'id' => '1736',
              'name' => 'yedda',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d0851270-71e9-11ec-b9a8-052a9d8d5273/1641800958788168773.jpg',
            ],
            [
              'id' => '1697',
              'name' => 'mavislee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/273e67a0-6dfe-11ec-a9bd-9bd40d2a62d6/1641369888911764209.jpeg',
            ],
            [
              'id' => '1075',
              'name' => 'annabellelinusd',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/02ac26d0-4b44-11ec-b55e-132388fe03d1/16375516012039821668.jpeg',
            ],
            [
              'id' => '1000',
              'name' => 'Robben',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/bd0336c0-474c-11ec-b495-f7d92e195d9c/1637115545620894607.jpg',
            ],
            [
              'id' => '704',
              'name' => 'Istvan',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/efdb33c0-387b-11ec-842d-97391cd9e256/5183cb8f91887a62e811993f4b8c237fc32b661d.jpg',
            ],
            [
              'id' => '694',
              'name' => 'BBC',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f74f4620-37cc-11ec-8095-1da95ee824b7/a58a941f3fd4e740cf9d01e41762dd9a18b555bb.jpg',
            ],
            [
              'id' => '692',
              'name' => 'Gavin',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/a966f550-37c1-11ec-8079-91977103321c/16354065451698868537.jpg',
            ],
            [
              'id' => '691',
              'name' => 'Cappuccino',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/8b4ecf50-37c1-11ec-9995-c5c412ed69d4/16354066001115573914.jpg',
            ],
            [
              'id' => '499',
              'name' => 'Jaymes',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/0db0bf10-2a7a-11ec-9dc9-9df78d16bdae/fa3965f15bb75c0a921b6c41a2969fd173a2d2b5.jpg',
            ],
            [
              'id' => '427',
              'name' => 'Natalie',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/bbaf05a0-227d-11ec-8639-67cc2c59cd36/359662fe2535617b19900ca5418bf5a5791898c5.jpg',
            ],
            [
              'id' => '419',
              'name' => 'Freddy',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/a2c91240-2260-11ec-843c-b57c20a8cb8b/0938ed666bdd5c4a46bd44d7ca678f959519385b.jpg',
            ],
            [
              'id' => '336',
              'name' => 'Keith',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/73221560-177e-11ec-b7a7-134a8c53c90e/6858bdfc2ecf7fda7f301ae2478128ed47d79e0c.jpg',
            ],
            [
              'id' => '270',
              'name' => 'Abdul Jaleel',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/0c457100-0ad0-11ec-8aa5-839803766661/689f25b691b1410e4d0d001bdd6b49ed07802933.jpg',
            ],
            [
              'id' => '196',
              'name' => 'Firdous',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/68361720-0000-11ec-adac-bf20c9380f73/a933a528df89c9f21034523c65e9e7488097b75e.jpg',
            ],
            [
              'id' => '179',
              'name' => 'Calvin Ho',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/af393fd0-fa66-11eb-81ac-d3bcf2b626f2/e3051660216c41079647da4642a0128090c97560.jpg',
            ],
            [
              'id' => '136',
              'name' => 'Joseph Lee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/be659e20-f342-11eb-896e-eb03d2459d91/fe10159fce289fce439ea563c538ca9cba700abf.jpg',
            ],
            [
              'id' => '122',
              'name' => 'Datu Ajie',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/0da02600-e5e7-11eb-b061-b351c7ee249a/bb875e7a44ce9006c24297581e41391c92423bf4.jpg',
            ],
            [
              'id' => '112',
              'name' => 'Dylan Lim',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/6c395530-e452-11eb-ac1d-83e66aeade21/64ecba28e084f927f94c21c3e4681a34cf4f2c9e.jpg',
            ],
            [
              'id' => '111',
              'name' => 'Celine Chan',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/1f0f7d00-e2b0-11eb-85b3-7577e5e0ad41/a4260e1ee0790f7c1458f0c2525a7aaeba598313.jpg',
            ],
            [
              'id' => '110',
              'name' => 'Jackson',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/93504030-e14c-11eb-a7b1-0d5a9139c778/c6443dabfc658e1e6b55e999fce873e9708c649a.jpg',
            ],
            [
              'id' => '109',
              'name' => 'KK Tan',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/3d1d7440-e145-11eb-952f-895cb773934d/790fb8d4223302e12c9c1d46698e95e91be58e61.jpg',
            ],
            [
              'id' => '108',
              'name' => 'Leon Lim',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/441f0510-dfc3-11eb-be0f-55d7f6ddaf38/514b084d3381e0053daeb0c8ba53cfdc5e872f75.jpg',
            ],
            [
              'id' => '107',
              'name' => 'Clara',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/24b47fb0-dfc3-11eb-8e70-5be5955e107e/2a36251d8445441f8230e829325258fe51ed065d.jpg',
            ],
            [
              'id' => '106',
              'name' => 'Jensen',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/63441020-dfab-11eb-8c81-43d56f34233b/04208c3c87058e78cb4f8fb44649b47e211d8e42.jpg',
            ],
            [
              'id' => '102',
              'name' => 'Jason Chin',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/6e2d6220-dc96-11eb-8033-ff45c69f734a/d789aa61ba59b8d7730b6c98aef1d91dd0911c30.jpg',
            ],
            [
              'id' => '101',
              'name' => 'Jason Foo',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/4b0bb0e0-dbf0-11eb-97b3-0185b99ef8be/60355c9789064ef3bef2ab748b41754411adf624.jpg',
            ],
            [
              'id' => '100',
              'name' => 'Mr. Teng',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/2b2bb750-dbf0-11eb-aee9-7f2cacbf7141/a5ace0b68dbfc3c6306bfa80378bed10c34b3679.jpg',
            ],
            [
              'id' => '99',
              'name' => 'CP Lee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/095ed6e0-dbf0-11eb-895d-7bad6efdd8c2/1398979496ccda7bde240a80a33f788fe22a05d2.jpg',
            ],
            [
              'id' => '98',
              'name' => 'Siew SM',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/df5128e0-dbef-11eb-919e-931cf148f4d4/77ed363f4f92c14e989e47c3fe367772750c4dc5.jpg',
            ],
            [
              'id' => '97',
              'name' => 'Siew KK',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/4bce8740-dbef-11eb-9190-b351ca270b55/80a236a8c1974ea05cb24f32e8906d6d4b1e29bf.jpg',
            ],
            [
              'id' => '96',
              'name' => 'Chia BC',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/a90f94a0-dbb6-11eb-9332-676eb4ee15c2/0ec6fb76e16a8471e32197a81d650b7223b81490.jpg',
            ],
            [
              'id' => '95',
              'name' => 'Jeffrey',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/4940c9c0-dba4-11eb-b5dc-95ce09c9ec93/f8b3adc92f4c7c451a4fc6bc22b4c83d9ff0fa8b.jpg',
            ],
            [
              'id' => '91',
              'name' => 'Jimmy Phoon',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/56d4d000-dae7-11eb-ae11-9d87acdbb65b/a83eff52b2902e8dbeb449fba548da28c60e8187.jpg',
            ],
            [
              'id' => '88',
              'name' => 'Teng',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/ae5fe220-dada-11eb-8314-89b5b7b6415c/ff4e5f0eb8d6087bdb09f115bb1ade77f7d5fe80.jpg',
            ],
            [
              'id' => '84',
              'name' => 'Gavin',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/5062ea20-d975-11eb-9837-33804021a53a/729c591994e97c8687ff71b2a59e20dd1b6b60e9.jpg',
            ],
            [
              'id' => '73',
              'name' => 'Tonnie',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/daace3f0-d95f-11eb-8061-73b6db985430/bb3082b167d3ec0932b6111f5e1220cf1e2d3a91.jpg',
            ],
            [
              'id' => '72',
              'name' => 'Mr. Tang',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/1db36130-d81c-11eb-ab97-59a3d540da53/b857b5a2c5e64fe8d20a38367f4e82f3d5af3f1f.jpg',
            ],
            [
              'id' => '71',
              'name' => 'Chris Chua',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d67c2f00-d81b-11eb-b342-fb37f811bddf/ef8c32bb877fa2e1c47c28a9bc75a518ab8f6e02.jpg',
            ],
            [
              'id' => '70',
              'name' => 'Ramesh',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/13023d20-d71a-11eb-8ecd-5776fbd5d592/3a878a9f27e6b86135c0fabe6979c46005d4d536.jpg',
            ],
            [
              'id' => '69',
              'name' => 'Mr. Saw',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/6854e720-d332-11eb-a26d-95519fe12483/6a35926700620c63d8ee25c5fec90ad1886c6251.jpg',
            ],
            [
              'id' => '67',
              'name' => 'Wen Lim',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/04560620-c512-11eb-bb89-e712ed7875a8/b33281c2612b946c047f8d5a2d73c1a47157472f.jpg',
            ],
            [
              'id' => '66',
              'name' => 'Sye',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/56080500-c396-11eb-8972-89e684172a4e/ed80293c9da0a0c89cc8af090ab2e88f616139fb.jpg',
            ],
            [
              'id' => '65',
              'name' => 'Brandon Wong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f784d090-c28d-11eb-8575-2142b533d3a5/d696d97028a632960345f8db8c8a05bf87447fdc.jpg',
            ],
            [
              'id' => '64',
              'name' => 'Lucas',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/2ad06e30-c276-11eb-8d09-c1368f6a39df/c4cbd6616b39873ff081c4c96ea531899a49a00e.jpg',
            ],
            [
              'id' => '63',
              'name' => 'Mr. Kee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/bee961e0-c1d0-11eb-b568-3d35b6385759/0996f4b2fd5c4e8e549622559cbcff88418805c1.jpg',
            ],
            [
              'id' => '62',
              'name' => 'Roland Liew',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/7a91c690-c15e-11eb-ad7e-e5d6a9366929/8f8b8dd9df49d8d47a7a060ba9cd31552f1f7b3a.jpg',
            ],
            [
              'id' => '61',
              'name' => 'Grace Liew',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d557b950-c15d-11eb-811d-a9e83bc9daee/6dc6a25cd24cb3abb564bd473dcf9f5f8605593a.jpg',
            ],
            [
              'id' => '60',
              'name' => 'Shirley Liew',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/02852110-c155-11eb-a5e8-8bb02c87da44/df6007c68e613f79e4467376f90e6a728b7123ce.jpg',
            ],
            [
              'id' => '59',
              'name' => 'Ashley Chong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/8c5ed680-c153-11eb-bd9a-49bca4c8043a/933523dac4bc8f53a1bdaba834bb34721e9f42fb.jpg',
            ],
            [
              'id' => '58',
              'name' => 'Charmaine Wong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/cb56e190-c152-11eb-b6d6-79003210e7c0/f152b932b6f1ffe0715a6bbc75509771f349bd14.jpg',
            ],
            [
              'id' => '57',
              'name' => 'Yi Rou',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/0e8c5c20-c14d-11eb-b2b7-bdf2404c1b51/b61e807ace378191031a495057c1c4367b44b587.jpg',
            ],
            [
              'id' => '56',
              'name' => 'Vanessa Wong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/c76e3cf0-c14c-11eb-97e3-55b8844946f7/a986398fd4420a771d3790c3cc0a02e507ed0c9e.jpg',
            ],
            [
              'id' => '55',
              'name' => 'Simon Wong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/92dc6ee0-c14c-11eb-820f-715874f1a988/fddb999d282ab93f700cc1647a4c0d5d70182588.jpg',
            ],
            [
              'id' => '54',
              'name' => 'Ah Foh',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/2b36ffe0-c14c-11eb-80b6-df81dd578bf3/a01ab5ea0d114cb675a3c19dc74bf08adfc83a12.jpg',
            ],
            [
              'id' => '53',
              'name' => 'Tracy Wong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/ca9c3580-c14b-11eb-85c4-551cfab112b1/dc0b01c37fa9690d6c346af36647979b96393321.jpg',
            ],
            [
              'id' => '52',
              'name' => 'Pen Chong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/b2b2c440-c14a-11eb-8722-53c0c84a1714/9490ab2ef46aedb138e88c6bfa1ca8e67914a6e4.jpg',
            ],
            [
              'id' => '51',
              'name' => 'Jian Shen',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d2bfafa0-c030-11eb-beaf-53faa8d05744/633f830a0c867d466e646a8a4137b7b22085260b.jpg',
            ],
            [
              'id' => '50',
              'name' => 'Agnes Yang',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/75ed08e0-c030-11eb-b152-b7f681bfd01b/9aeffff2e81f61bf8377fe1be15ad441f03cbf16.jpg',
            ],
            [
              'id' => '48',
              'name' => 'Sharon',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/b18f2e40-bf59-11eb-93e8-7bf6bb6dc237/86a268057be3391aa52187b7d702c83aec1a22c7.jpg',
            ],
            [
              'id' => '47',
              'name' => 'Thanos',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f43115b0-bee7-11eb-b368-75dd6d0c4239/fd7c293be75d1e793ee010137965f55ae3fe9d64.jpg',
            ],
            [
              'id' => '46',
              'name' => 'Mei Lee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d30759e0-bee4-11eb-98c3-4f3a7c63b265/8741bba145c93f6053011efff78432fcb4bdd2c4.jpg',
            ],
            [
              'id' => '45',
              'name' => 'Yao Tong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/5690f240-bee4-11eb-8518-abd0f599bbf8/b33c7c3c7f871f8872d96408540faef853d09970.jpg',
            ],
            [
              'id' => '44',
              'name' => 'Roy Choo',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/c65a86b0-bee3-11eb-a14a-e5e77bb2ccb5/7f1b86be0444dfb175b4a4ecd8cad3bb08972888.jpg',
            ],
            [
              'id' => '43',
              'name' => 'Jasper Li',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/84182930-bee3-11eb-9bd3-9948e2df3cc6/44c2600675366d4bafaecdde9f473cf958d074b9.jpg',
            ],
            [
              'id' => '42',
              'name' => 'Chanel Tan',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/2bc0abc0-bee3-11eb-9988-fd1ffc8f2553/8b1fcd8c8090c86470c8346208837721a1cce204.jpg',
            ],
            [
              'id' => '41',
              'name' => 'Dato’ William',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/af14f800-bee2-11eb-9c73-9b8a4506fd55/68cc19ea84f5c57df590479591bf81ce1924341d.jpg',
            ],
            [
              'id' => '40',
              'name' => 'Datuk Kelvin',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/e3259f50-bed3-11eb-9ef5-2565e3b95698/b32e97fa98bcbced6a71b5c7e7348775fcf5af55.jpg',
            ],
            [
              'id' => '39',
              'name' => 'Christie',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/a4161140-bed3-11eb-a1b8-8bb656c4f884/d35b71af1a5b978855065cec4f7ded2cc6683466.jpg',
            ],
            [
              'id' => '38',
              'name' => 'Hidayah',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/32b7f450-bed3-11eb-8b93-a7e0db8695ba/fbfe2d8174338438eb08b85369309a82b5ae0a98.jpg',
            ],
            [
              'id' => '37',
              'name' => 'Wani',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/01b48c80-bed3-11eb-8b0a-6ddc5e65dbbf/7ca50a9902a7c37c69eeab6b54ae384f2a8e7ac8.jpg',
            ],
            [
              'id' => '36',
              'name' => 'Yvonne',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/c85065e0-bed2-11eb-b2d0-31d2d78a9c0e/d152b87a07e8d90f042c7455199003d4decac40e.jpg',
            ],
            [
              'id' => '35',
              'name' => 'Deborah',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/4c125cd0-bed2-11eb-b42c-1718d1287eb0/5ad62753f00c38164fedc7bc96252e7c71edc58f.jpg',
            ],
            [
              'id' => '34',
              'name' => 'Diana',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f2738040-bed1-11eb-9ab0-a1ec6ac7d277/42cb811a6cdab95f670a04e645ae93d0742033d6.jpg',
            ],
            [
              'id' => '33',
              'name' => 'Chek Yin',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/e84915c0-beae-11eb-97bd-9dfab2c2ec2c/9554bac9c8a4dd4aa8e793f8ae12e6c9d84a01ef.jpg',
            ],
            [
              'id' => '32',
              'name' => 'KY Yap',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/b16a89e0-beae-11eb-bb3c-bdc5a6e01c5f/2f228bdcf9eddfdde453fc7fee3c50c31039c2a5.jpg',
            ],
            [
              'id' => '31',
              'name' => 'Tony',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/3ccaf3f0-beae-11eb-b207-ab37f5b9e020/b6ebff76efe1b51b1efe972551b89fcc4f7602c3.jpg',
            ],
            [
              'id' => '30',
              'name' => 'James',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/c5d0c590-bead-11eb-a75d-cf974d077899/8c2a0d5a2defedfe52d4efcb2f02d0e43e7ecb4e.jpg',
            ],
            [
              'id' => '29',
              'name' => 'Terry',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/6a69cf10-bead-11eb-9e3f-e723ee4350d0/5e09688d6729f44620ff2433def01f76c6eb4d01.jpg',
            ],
            [
              'id' => '28',
              'name' => 'Suki',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/293c60e0-bead-11eb-ae2b-efb31cd22823/00fba3c3fe1a661652fbb32d714767d18f72b7cb.jpg',
            ],
            [
              'id' => '27',
              'name' => 'Stefanie',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f775d800-beac-11eb-90c3-c17a60725cc0/8cd07d815196429d2756d7feb9e06f20ae9742a9.jpg',
            ],
            [
              'id' => '26',
              'name' => 'Simon',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/bc914d80-beac-11eb-b34a-1bb6bd1f414d/c5bd1a540c291af54db3d6b25ed84232a271fd75.jpg',
            ],
            [
              'id' => '25',
              'name' => 'Shirley Lee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/53913230-beac-11eb-8056-d3c6432cae52/a79d5b8e1f6300742ab5f57a28775b7ca23023b5.jpg',
            ],
            [
              'id' => '24',
              'name' => 'Sam Wong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/1b567c60-beac-11eb-8d72-73e15126a5d5/5e960d1b13c6fcdb71b2452c32076c20aa93bca4.jpg',
            ],
            [
              'id' => '23',
              'name' => 'May Soon',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/7dcd6240-beaa-11eb-914e-e7f814125cb7/a92a7ffd34cadea138859fab43e6b1511dc5f283.jpg',
            ],
            [
              'id' => '22',
              'name' => 'Kammy',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/907935c0-bea9-11eb-ab35-5dbcc3bafc55/588723636af93c4153f2342b723e58aa2bb68e93.jpg',
            ],
            [
              'id' => '21',
              'name' => 'Esther Chong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/4d8a0f50-bea9-11eb-8ff0-3705b9b73cdd/f55ee0a6525eabc77fd76d6132754d2529ac560c.jpg',
            ],
            [
              'id' => '20',
              'name' => 'Zul',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/c74dac50-bea8-11eb-9dcd-f1943717a542/a4e0427be2c95f5951a2a22ef75b5343114b50ae.jpg',
            ],
            [
              'id' => '19',
              'name' => 'Liew Yi',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/7f58cd30-bea8-11eb-85a2-eb108daea057/afb6a72c8df73b4caa9193e9a671df572bc7eac1.jpg',
            ],
            [
              'id' => '18',
              'name' => 'Syed',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/2812f070-bea8-11eb-89fe-a526551f8984/b348acb0969c709dc69c874f3ce03d69deabfdff.jpg',
            ],
            [
              'id' => '17',
              'name' => 'Siti',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/d7b88fb0-bea7-11eb-b397-7bff490b864e/a9db118cacaa3286a17d38282329a767f64b1d64.jpg',
            ],
            [
              'id' => '16',
              'name' => 'Satish',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/540a6350-bea7-11eb-8923-e10bc31e0549/395e6f88a9815727ad8b202feabd23551cc56c19.jpg',
            ],
            [
              'id' => '15',
              'name' => 'Dharani',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f4915ce0-bea2-11eb-b0a7-016c79ca0845/476a2788d802be89fe7e5ba41b9fdbc75f4d8659.jpg',
            ],
            [
              'id' => '14',
              'name' => 'Francis Hor',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/6816ac60-bea2-11eb-ac05-3f1c9b254b7c/dac1145f024e1bcafc1b73aec64b53545289bbaf.jpg',
            ],
            [
              'id' => '13',
              'name' => 'Chelvan',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/14c22380-bea2-11eb-a0ce-d94b32e22cf1/6086c95c0e29c7da52bca82c13076004751443a7.jpg',
            ],
            [
              'id' => '12',
              'name' => 'Jimmy',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/cd16c6f0-bea1-11eb-982f-6bea3b27d2e8/60e54a38678a7ba85ebd6ba055828a45210ae9c5.jpg',
            ],
            [
              'id' => '11',
              'name' => 'Billy Lai',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/3708c810-bea1-11eb-8a4a-73c3a9ef9917/24f1200ea1851192b2b759f4790d887731da892a.jpg',
            ],
            [
              'id' => '10',
              'name' => 'Ben Quek',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/e9865e20-bea0-11eb-a128-613b8d2c2ee5/1c40848f2c6647e42677765a6a34fc3dcfc6462d.jpg',
            ],
            [
              'id' => '9',
              'name' => 'Jack Yong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/7ac31ac0-bea0-11eb-8efe-9b71e98d022a/510a2cde729c1a3313078dbfba86faa7ba48659a.jpg',
            ],
            [
              'id' => '8',
              'name' => 'David Lee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/f90fb590-be9f-11eb-ab04-cf68d7121b9c/e666e5b67fecb40dd8a857cc7069e947b45cf7f2.jpg',
            ],
            [
              'id' => '7',
              'name' => 'Jega',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/23fcae20-be9f-11eb-8d50-13aca87f8299/867d7f4b2076f6bd388b4d154454b2969ac509a9.jpg',
            ],
            [
              'id' => '6',
              'name' => 'Xiu Xiu',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/cb5789d0-be9e-11eb-8f8e-2bd665bd6660/c210719583ab3e61ede0b29f61176cee9eff82c0.jpg',
            ],
            [
              'id' => '5',
              'name' => 'Ajay',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/7f18ad80-be9d-11eb-bf79-4f3e7cecf439/30f8148281c83aa5b1161f60e27b55fd7104bd3a.jpg',
            ],
            [
              'id' => '4',
              'name' => 'Elaine Lee',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/145969c0-be9d-11eb-9f19-d70d37f82c1e/fa471147e57b847e03628076def85a14835e51ec.jpg',
            ],
            [
              'id' => '2',
              'name' => 'Ken Wong',
              'photo' => 'https://imgweb.whizzl.com/whizzl-app-production-v2/worker_ams/staff_media/12d65c20-be9c-11eb-b745-3b1c51d2b71c/7425b82967c99534f73830442027e91a352ba8e5.jpg',
            ],
        ];

        DB::table('staffs')->insert($dataStaffLive);

        $staffsRandom = [];
        for ($i = 1; $i <= 2000; $i++) {
            $faker = \Faker\Factory::create('en_US');
            $staffsRandom[] = [
                'name' => $faker->name(),
                'photo' => $faker->imageUrl(640, 480, 'people', true, 'Faker'),
            ];
        }

        DB::table('staffs')->insert($staffsRandom);
    }
}
