@extends("masterLayout")
@section("main-content")
    <div class="col-md-9" style="background-color:skyblue;">
        <h1>Calculator</h1>
        <form name="cal">
            <tr><td colspan=3.5>
                    <input type=text id="ar" name="display"/></td>
                <td><input id="cbt" type="button" value="C" OnClick="show('clear')"/></td>
            </tr>
            <tr>
                <td><input id="bt" type="button" value="7"  OnClick="show(7)"/></td>
                <td><input id="bt" type="button" value="8" OnClick="show(8)"/></td>
                <td><input id="bt" type="button" value="9" OnClick="show(9)"/></td>
                <td><input id="bt" type="button" value="+" OnClick="show('add')"/></td>
            </tr>
            <tr>
                <td><input id="bt" type="button" value="4" OnClick="show(4)"/></td>
                <td><input id="bt" type="button" value="5" OnClick="show(5)"/></td>
                <td><input id="bt" type="button" value="6" OnClick="show(6)"/></td>
                <td><input id="bt" type="button" value="-" OnClick="show('sub')"/></td>
            </tr>
            <tr>
                <td><input id="bt" type="button" value="1" OnClick="show(1)"/></td>
                <td><input id="bt" type="button" value="2" OnClick="show(2)"/></td>
                <td><input id="bt" type="button" value="3" OnClick="show(3)"/></td>
                <td><input id="bt" type="button" value="*" OnClick="show('mul')"/></td>
            </tr>
            <tr>
                <td><input id="bt" type="button" value="0" OnClick="show(0)"/></td>
                <td><input id="bt" type="button" value="." OnClick="show('dot')"/></td>
                <td><input id="bt" type="button" value="=" OnClick="show('res')"/></td>
                <td><input id="bt" type="button" value="/" OnClick="show('div')"/></td>
            </tr>
        </form>
        <script>
            var num;
            function show(num)
            {
                switch(num)
                {
                    case 'clear':
                        document.cal.display.value="";
                        break;
                    case 0:
                        document.cal.display.value=(document.cal.display.value)+"0";
                        break;
                    case 1:
                        document.cal.display.value=(document.cal.display.value)+"1";
                        break;
                    case 2:
                        document.cal.display.value=(document.cal.display.value)+"2";
                        break;
                    case 3:
                        document.cal.display.value=(document.cal.display.value)+"3";
                        break;
                    case 4:
                        document.cal.display.value=(document.cal.display.value)+"4";
                        break;
                    case 5:
                        document.cal.display.value=(document.cal.display.value)+"5";
                        break;
                    case 6:
                        document.cal.display.value=(document.cal.display.value)+"6";
                        break;
                    case 7:
                        document.cal.display.value=(document.cal.display.value)+"7";
                        break;
                    case 8:
                        document.cal.display.value=(document.cal.display.value)+"8";
                        break;
                    case 9:
                        document.cal.display.value=(document.cal.display.value)+"9";
                        break;
                    case 'dot' :
                        document.cal.display.value=(document.cal.display.value)+".";
                        break;
                    case 'add' :
                        document.cal.display.value=(document.cal.display.value)+"+";
                        break;
                    case 'sub' :
                        document.cal.display.value=(document.cal.display.value)+"-";
                        break;
                    case 'mul' :
                        document.cal.display.value=(document.cal.display.value)+"*";
                        break;
                    case 'div' :
                        document.cal.display.value=(document.cal.display.value)+"/";
                    case 'res' :
                        document.cal.display.value=eval(document.cal.display.value);
                        break;
                        break;
                }
            }
        </script>

    </div>
    @endsection