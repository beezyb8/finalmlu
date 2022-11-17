<!-- NOT WORKING

// if(!defined('__CONFIG__')) {
//     exit('404 Gateway Error, Text 1(516)640-2417 and inform about error');
// } 

// class Network {
//     private $con;

//     public $user_id;
//     public $contactname;
//     public $notes;
//     public $bank;

//     public function __construct(int $user_id){
//         $this->con=DB::getConnection();
//         $user_id = $_SESSION['user_id'];
//         $networkdata = $this->con->prepare("SELECT * FROM contacts WHERE user_contactid = :user_contactid");
//         $networkdata->bindParam(':user_contactid', $user_id, PDO::PARAM_INT);
//         $networkdata->execute();
//     }

//     public static function DisplayTable($networkdata, $bank){
//         $user_id = $_SESSION['user_id'];
//         $networkdata = $this->con->prepare("SELECT * FROM contacts WHERE user_contactid = :user_contactid");
//         $networkdata->bindParam(':user_contactid', $user_id, PDO::PARAM_INT);
//         $networkdata->execute();
//         foreach($networkdata as $val){
//             if($val->bank = $bank){
//                 echo "something";
//             }
//         }
//     }
// }