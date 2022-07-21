<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM TUGAS AKHIR</title>

    <link rel="stylesheet" type="text/css" href="style_tugasakhir.css">
    <script src="script_kalkulatorTA.js"></script>
    <script src=""></script>
</head>

<body>
    <div class="header">
        <img src="foto.png">
        <br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PASCALINO V B B PUTRA
        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2100018495
        <div class="line"></div>
        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TUGAS AKHIR
        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PEMOGRAMAN WEB
    </div>
    <div class="side-program">

        <!-- program 01 membuat kalkulator -->
        <h1>PROGRAM 01 KALKULATOR</h1>
        <div class="kalkulator-main">
            <h2>kalkulator</h2><br>
            <form name="form">
                <input align="left" type="textarea" name="textarea" class="textarea">
            </form>
            <table>
                <!-- <tr>
                    </tr> -->
                <tr>
                    <td><input class="tombolKalkulator" type="button" value="1" onclick="insert(1)"></td>
                    <td><input class="tombolKalkulator" type="button" value="2" onclick="insert(2)"></td>
                    <td><input class="tombolKalkulator" type="button" value="3" onclick="insert(3)"></td>
                    <td><input class="clear" type="button" value="c" onclick="clean()"></td>
                    <td><input class="back" type="button" value="←" onclick="back()"></td>
                </tr>
                <tr>
                    <td><input class="tombolKalkulator" type="button" value="4" onclick="insert(4)"></td>
                    <td><input class="tombolKalkulator" type="button" value="5" onclick="insert(5)"></td>
                    <td><input class="tombolKalkulator" type="button" value="6" onclick="insert(6)"></td>
                    <td><input class="bagi" type="button" value="÷" onclick="insert('/')"></td>
                    <td rowspan="1"><input class="tombolKalkulator-color" type="button" value="x" onclick="insert('*')">
                    </td>
                </tr>
                <tr>
                    <td><input class="tombolKalkulator" type="button" value="7" onclick="insert(7)"></td>
                    <td><input class=" tombolKalkulator" type="button" value="8" onclick="insert(8)"></td>
                    <td><input class="tombolKalkulator" type="button" value="9" onclick="insert(9)"></td>
                    <td><input class="tombolKalkulator-color" type="button" value="+" onclick="insert('+')"></td>
                    <td><input class="tombolKalkulator-color" type="button" value="-" onclick="insert('-')"></td>
                </tr>
                <tr>
                    <td><input class="tombolKalkulator" type="button" value="0" onclick="insert(0)"></td>
                    <td><input class="tombolKalkulator" type="button" value="00" onclick="insert('00')"></td>
                    <td><input class="tombolKalkulator" type="button" value="." onclick="insert('.')"></td>
                    <td colspan="2"><input class="samadengan" type="button" value="=" onclick="equal()"></td>
                </tr>
            </table>
        </div>

        <!-- program 02 membuat KALENDER -->
        <br><br>
        <h1>PROGRAM 02 KALENDER</h1>
        <div class="bulan"><br>JULI 2022</div>

        <ul class="namahari">
            <li>Min</li>
            <li>Sen</li>
            <li>Sel</li>
            <li>Rab</li>
            <li>Kam</li>
            <li>Jum</li>
            <li>Sab</li>
        </ul>

        <ul class="hari">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li><span class="active">7</span></li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
        </ul>
    </div>


    <!-- program 03 membuat FORM -->
    <div class="form">
        <div class="line-form"></div>
        <div>
            <h1>
                <br>PROGRAM 03<br>
                FORM INPUT DAN OUTPUT<br><br>
            </h1>
        </div>
        <div class="line-form"></div>

        <form name="form1" method="post" action="proses_form.php">
            <center>

                <table width="70%" height="68%" border="0" align="center">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input name="nama" type="text" id="nama"></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><input name="alamat" type="text" id="alamat"></td>
                    </tr>

                    <tr>
                        <td>E-Mail</td>__
                        <td><input name="email" type="text" id="email"></td>
                    </tr>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td>
                            <select name="gender" id="gender">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Saran</td>
                        <td><textarea name="saran" id="saran"></textarea></td> </textarea>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input class="kirimButton-form" type="submit" name="Submit" value="Kirim"><input class="batalButton-form" type="reset" name="Submit2" value="Batal">
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </div>
    <div align="center"><strong><a href="output_form.php"><br><br>→ → KLIK INI UNTUK MELIHAT KEMBALI DATA FORM YANG DI INPUT SEBELUMNYA ← ←<br><br><br></a></strong></div>
    <div class="line-form"></div>
    <center>
        <font color="red">
            COPY RIGHT © 2022 OLEH PASCALINO V B B PUTRA
    </center>
</body>

</html>