<?php 
if($_POST['action_code']=='call'){

    $wallet=(int) $_POST['wallet'];
    
    $bet_id=$_POST['bet_id'];

    $dice1=rand(1,6);
    $dice2=rand(1,6);

    $sum=$dice1+$dice2;
    
    if($bet_id=='1'){
        if($sum<7){
            $wallet=$wallet+10;
        }
        else{
            $wallet=$wallet-10;
        }
    }

    if($bet_id=='2'){
        if($sum==7){
            $wallet=$wallet+20;
        }
        else{
            $wallet=$wallet-10;
        }
    }

    if($bet_id=='3'){
        if($sum>7){
            $wallet=$wallet+10;
        }
        else{
            $wallet=$wallet-10;
        }
    }

    echo $wallet.'-'.$sum.'-'.$dice1.'-'.$dice2;
}
?>