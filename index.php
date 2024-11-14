<html>
    <head>
        <title>lucky 7</title>
        <script src="xmlHttpClient.js"></script>
        <script src="xmlHttpClientARTH.js"></script>

    </head>
    <body style="margin-left:20%;margin-top:10%;">
        <script type="text/javascript">
            function reset(){
                document.getElementById('play').disabled=false;
                document.getElementById('wallet').value=100;
                document.getElementById('total').value='';
                document.getElementById('d1').value='';
                document.getElementById('d2').value='';
                document.getElementById('bet_id').value='';
                document.getElementById('bet_type').value='';

            }
            function cont(){
                document.getElementById('bet_id').value='';
                document.getElementById('bet_type').value='';
                document.getElementById('play').disabled=false;
                document.getElementById('total').value='';
                document.getElementById('d1').value='';
                document.getElementById('d2').value='';
            }
            function call(){
                wallet=document.getElementById('wallet').value;
                bet_id=document.getElementById('bet_id').value;

                if(bet_id==""){
                    alert('Select Bet');
                    return
                }
                document.getElementById('play').disabled=true;
                let str=xmlHTTP_send_post('check.php','action_code=call&wallet='+wallet + '&bet_id='+ bet_id);
                let abc=str.split('-');
                document.getElementById('wallet').value=abc[0];
                document.getElementById('total').value=abc[1];
                document.getElementById('d1').value=abc[2];
                document.getElementById('d2').value=abc[3];
                
            }
            function select_bet(bet_id){
                if(bet_id=='1'){
                    document.getElementById('bet_type').value='Below 7';
                    document.getElementById('bet_id').value=bet_id;
                }
                if(bet_id=='2'){
                    document.getElementById('bet_type').value='Lucky 7';
                    document.getElementById('bet_id').value=bet_id;
                }
                if(bet_id=='3'){
                    document.getElementById('bet_type').value='Above 7';
                    document.getElementById('bet_id').value=bet_id;
                }
                
            }
          
            </script>
        <div>
        <p>welcome to Lucky 7 game</p>
        <p>place your bet (Rs 10):
            <div>
                <label>Bet Type</label>
        <input type="text" value="" id="bet_type">
        <input type="hidden" value="" id="bet_id">
        </div> 
        <input type="button" value="Below 7" onclick="select_bet('1')">
         <input type="button" value="7" onclick="select_bet('2')">
         <input type="button" value="Above 7" onclick="select_bet('3')">
         <button onclick="call();" id="play">Play</button>
        </div>
        <div>
<p>Game Results</p>
<form>
    <div>
        <label>Dice 1</label>
        <input type="text" id="d1">
    </div>
    <div>
        <label>Dice 2</label>
        <input type="text" id="d2">
    </div>
    <div>
        <label>Total</label>
        <input type="text" id="total">
    </div>
</form>
         </div>
         <div>
            <label>Wallet Balance</label><input type="text" id="wallet" value="100"><br>
            <button onclick="reset();">Reset</button>
            <button onclick="cont()">continue playing</button> 
         </div>
    </body>
</html>