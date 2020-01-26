<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
        <form action="backend.php" method="POST">
            <div>
                <label for="">
                    Ismi
                    <input type="text" name="ism">
                </label>
            </div>
           <div>
                <label for="">
                    Familiyasi
                    <input type="text" name="familiyasi">
                </label>
            </div>
            <div>
                <label for="">
                    Sharifi
                    <input type="text" name="sharifi">
                </label>
            </div>
            <div>
                <label for="">
                    Matn
                    <textarea name="matn" id="" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div>
                <label for="">
                   <b> Pahlavon Mahmud kim bo'lgan: </b><br>
                    <input type="radio" name="abs" value="Noto'g'ri"> A) Etikdo'z
                    <input type="radio" name ="abs" value="Noto'g'ri"> B) Chavondoz
                    <input type="radio" name="abs" value="To'g'ri"> C) Kurashchi
                </label>
            </div>
            <div>
                <input type="checkbox" name="abc" value="Maktabni tamomlagan"> Maktabni bitirganmisiz?
            </div>
            <button type="sumbit">Yuborish</button>
        </form>
    </body>
</html> 