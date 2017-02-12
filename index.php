<!DOCTYPE html>
<html>
    <head>
        <title>Izypayment | php Sample</title>
    </head>
    <body>
        <h1 align="center"> Veuillez entrer votre code de paiment ci dessous </h1>
        <br/>
        <form name="izypayForm" method="post" action="purchase.php">
            <table align="center">
                <tr>
                    <td>
                        Code de Paiement :
                    </td>
                    <td>
                        <input type="text" name="secret"/>
                    </td>
                </tr>
            </table>
            <br/>
            <div align="center">
                <button type="submit" name="submit">Payer</button>
            </div>
        </form>
    </body>
</html>
