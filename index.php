<!DOCTYPE html>
<html>
<head>
    <style>
            input[type="button"] {
            border-radius: 10px;
            background-color: rgb(44, 141, 221);
            color: black;
            width: 100%;
            height: 100%;
            border: none;
            font-size: large;
        }

        input[type="text"] {
            text-align: left;
            background-color: rgb(255, 255, 255);
            width: 100%;
            border: 1px solid black;
            height: 100%;
            font-size: large;
        }
        table{
            padding: auto;
        }

    
    </style>
    <script>
        var from="from";
        var to="to";
            function  putval(value){
                document.getElementById("text2").value=value;
                this.from=value;
            }
            function putval1(value){
                document.getElementById("text3").value=value;
                this.to= value;
            }
            function puttext(value){
                var currentValue=document.getElementById("text1").value;
                var newval=currentValue+value;
                document.getElementById("text1").value=newval;

            }
            function convert(){
                let num=document.getElementById("text1").value;
                var out;
                var val=0;
                if(num==""){
                   out="Enter a number";
                   alert(out);
                }
                
                else if(from==to){
                    out="Both can't be same";
                    alert(out);
                    
                }
                else if( from=="dollor" ){
                    if(to=="Rupee"){
                        val=num*72.49;
                    }
                    else if(to=="Euro"){
                        val=num* 0.84;
                    }
                }
                else if( from=="Rupee" ){
                    if(to=="dollor"){
                        val=num*0.014;
                    }
                    else if(to=="Euro"){
                        val=num*0.012;
                    }
                }
                else if( from =="Euro" ){
                    if(to=="Rupee"){
                        val=num*86.47;
                    }
                    else if(to=="dollor"){
                        val=num*1.19;
                    }
                }
                document.getElementById("text1").value=val ;
            }

    </script>
</head>
<body>
    <table border="3">
        <tr>
            <td colspan="5"><input type="text" id="text1"></td>
        </tr>
        <tr>
            <td><label>From:</label> </td>
            <td colspan="1"><input type="text" id="text2" size="4"></td>
            <td><input type="button"  value="Rupee" onclick="putval('Rupee')"></td>
            <td><input type="button"  value="dollor" onclick="putval('dollor')"></td>
            <td><input type="button"  value="Euro" onclick="putval('Euro')"></td>
        </tr>
        <tr>
            <td><label>To:</label> </td>
            <td colspan="0"><input type="text" id="text3" maxlength="4" size="4"></td>
            <td><input type="button" value="Rupee" onclick="putval1('Rupee')"></td>
            <td><input type="button" value="dollor" onclick="putval1('dollor')"></td>
            <td><input type="button"  value="Euro" onclick="putval1('Euro')"></td>
        </tr>
        <tr>
            <td><input type="button" value="1" onclick="puttext('1')" /> </td>
            <td><input type="button" value="2" onclick="puttext('2')" /> </td>
            <td><input type="button" value="3" onclick="puttext('3')" /> </td>
            <td colspan="2"><input type="button" value="." onclick="puttext('.')" /> </td>
        </tr>
        <tr>
            <td><input type="button" value="4" onclick="puttext('4')" /> </td>
            <td><input type="button" value="5" onclick="puttext('5')" /> </td>
            <td><input type="button" value="6" onclick="puttext('6')" /> </td>
            <td colspan="2"><input type="button" value="0" onclick="puttext('0')" /> </td>
        </tr>
        <tr>
            <td><input type="button" value="7" onclick="puttext('7')" /> </td>
            <td><input type="button" value="8" onclick="puttext('8')" /> </td>
            <td><input type="button" value="9" onclick="puttext('9')" /> </td>
            <td colspan="2"><input type="button" value="00" onclick="puttext('00')" /> </td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td colspan="5"><input type="button" value="Convert" onclick="convert()"></td>
        </tr>
    </table>
</body>
</html>
