<link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/js/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/moment.js"></script>

<div class="container" style="text-align: center;">
    <div class="row" style="margin-top: 10px">
        <div class="col-md-12 col-xs-12" style="margin-bottom: 10px;">
            <div id="tab" class="btn-group" data-toggle="buttons-radio">
                <a href="#train" data-toggle="tab"><button type="button" id="btn_train" class="btn btn-large btn-info active">KERETA API</button></a>
                <a href="#railink" data-toggle="tab"><button type="button" id="btn_railink" class="btn btn-large btn-default">RAILINK</button></a>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="train">
                <form id="kereta_k" name="kereta_k" action="" method="post">
                    <div class="col-md-5 col-xs-12 form-group">
                        <label for="asal_k"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Stasiun Asal</label>
                        <select name="asal_k" id="asal_k" class="form-control">
                            <option selected="selected" value="" >&nbsp;&nbsp;Dari</option>
                            <optgroup label="BANDUNG">
                                <option  value="BD">BANDUNG (BD)</option>
                                <option  value="CCL">CICALENGKA (CCL)</option>
                                <option  value="CD">CIKADONGDONG (CD)</option>
                                <option  value="CMI">CIMAHI (CMI)</option>
                                <option  value="GDB">GEDEBAGE (GDB)</option>
                                <option  value="HRP">HAURPUGUR (HRP)</option>
                                <option  value="KAC">KIARACONDONG (KAC)</option>
                                <option  value="PDL">PADALARANG (PDL)</option>
                                <option  value="RCK">RANCAEKEK (RCK)</option>
                                <option  value="RH">RENDEH (RH)</option>
                            </optgroup>
                            <optgroup label="BANJAR">
                                <option  value="BJR">BANJAR (BJR)</option>
                                <option  value="LN">LANGEN (LN)</option>
                            </optgroup>
                            <optgroup label="BANYUMAS">
                                <option  value="KRR">KARANGSARI (KRR)</option>
                                <option  value="KBS">KEBASEN (KBS)</option>
                                <option  value="KJ">KEMRANJEN (KJ)</option>
                                <option  value="NTG">NOTOG (NTG)</option>
                                <option  value="SPH">SUMPIUH (SPH)</option>
                                <option  value="TBK">TAMBAK (TBK)</option>
                            </optgroup>
                            <optgroup label="BANYUWANGI">
                                <option  value="BW">BANYUWANGIBARU (BW)</option>
                                <option  value="GLM">GLENMORE (GLM)</option>
                                <option  value="KBR">KALIBARU (KBR)</option>
                                <option  value="KSL">KALISETAIL (KSL)</option>
                                <option  value="KNE">KARANGASEM (KNE)</option>
                                <option  value="RGP">ROGOJAMPI (RGP)</option>
                                <option  value="SWD">SUMBERWADUNG (SWD)</option>
                                <option  value="TGR">TEMUGURUH (TGR)</option>
                            </optgroup>
                            <optgroup label="BATANG">
                                <option  value="BTG">BATANG (BTG)</option>
                                <option  value="UJN">UJUNGNEGORO (UJN)</option>
                            </optgroup>
                            <optgroup label="BATURAJA">
                                <option  value="BTA">BATURAJA (BTA)</option>
                                <option  value="PNW">PANINJAWAN (PNW)</option>
                            </optgroup>
                            <optgroup label="BEKASI">
                                <option  value="BKS">BEKASI (BKS)</option>
                            </optgroup>
                            <optgroup label="BINJAI">
                                <option  value="BIJ">BINJAI (BIJ)</option>
                            </optgroup>
                            <optgroup label="BLITAR">
                                <option  value="BL">BLITAR (BL)</option>
                                <option  value="GRM">GARUM (GRM)</option>
                                <option  value="KSB">KESAMBEN (KSB)</option>
                                <option  value="TAL">TALUN (TAL)</option>
                                <option  value="WG">WLINGI (WG)</option>
                            </optgroup>
                            <optgroup label="BLORA">
                                <option  value="CU">CEPU (CU)</option>
                                <option  value="DPL">DOPLANG (DPL)</option>
                                <option  value="RBG">RANDUBLATUNG (RBG)</option>
                            </optgroup>
                            <optgroup label="BOGOR">
                                <option  value="BTT">BATU TULIS (BTT)</option>
                                <option  value="BOO">BOGOR (BOO)</option>
                                <option  value="CGB">CIGOMBONG (CGB)</option>
                                <option  value="MSG">MASENG (MSG)</option>
                                <option  value="PRP">PARUNGPANJANG (PRP)</option>
                            </optgroup>
                            <optgroup label="BOJONEGORO">
                                <option  value="BJ">BOJONEGORO (BJ)</option>

                                <option  value="KIT">KALITIDU (KIT)</option>

                                <option  value="SRJ">SUMBERREJO (SRJ)</option>
                            </optgroup>
                            <optgroup label="BOYOLALI">
                                <option  value="TW">TELAWA (TW)</option>
                            </optgroup>
                            <optgroup label="BREBES">
                                <option  value="BB">BREBES (BB)</option>

                                <option  value="BKA">BULAKAMBA (BKA)</option>

                                <option  value="BMA">BUMIAYU (BMA)</option>

                                <option  value="KGG">KETANGGUNGAN (KGG)</option>

                                <option  value="KGB">KETANGGUNGAN BARAT (KGB)</option>

                                <option  value="KRT">KRETEK (KRT)</option>

                                <option  value="LR">LARANGAN (LR)</option>

                                <option  value="LRA">LARANGAN (LRA)</option>

                                <option  value="LG">LINGGAPURA (LG)</option>

                                <option  value="PAT">PATUGURAN (PAT)</option>

                                <option  value="SGG">SONGGOM (SGG)</option>

                                <option  value="TGN">TANJUNG (TGN)</option>
                            </optgroup>
                            <optgroup label="CIAMIS">
                                <option  value="BJI">BANJARSARI (BJI)</option>

                                <option  value="CI">CIAMIS (CI)</option>
                            </optgroup>
                            <optgroup label="CIANJUR">
                                <option  value="CJ">CIANJUR (CJ)</option>

                                <option  value="CBB">CIBEBER (CBB)</option>

                                <option  value="CLK">CILAKU (CLK)</option>

                                <option  value="LP">LAMPEGAN (LP)</option>
                            </optgroup>
                            <optgroup label="CIKAMPEK">
                                <option  value="CKP">CIKAMPEK (CKP)</option>
                            </optgroup>
                            <optgroup label="CILACAP">
                                <option  value="CP">CILACAP (CP)</option>

                                <option  value="CPI">CIPARI (CPI)</option>

                                <option  value="GDM">GANDRUNGMANGUN (GDM)</option>

                                <option  value="GM">GUMILIR (GM)</option>

                                <option  value="JRL">JERUKLEGI (JRL)</option>

                                <option  value="KWG">KAWUNGANTEN (KWG)</option>

                                <option  value="KYA">KROYA (KYA)</option>

                                <option  value="LBG">LEBENG (LBG)</option>

                                <option  value="MA">MAOS (MA)</option>

                                <option  value="MLW">MELUWUNG (MLW)</option>

                                <option  value="SDR">SIDAREJA (SDR)</option>

                                <option  value="SKP">SIKAMPUH (SKP)</option>
                            </optgroup>
                            <optgroup label="CILEGON">
                                <option  value="CLG">CILEGON (CLG)</option>

                                <option  value="MER">MERAK (MER)</option>
                            </optgroup>
                            <optgroup label="CIREBON">
                                <option  value="AWN">ARJAWINANGUN (AWN)</option>

                                <option  value="BBK">BABAKAN (BBK)</option>

                                <option  value="CLD">CILEDUG (CLD)</option>

                                <option  value="CN">CIREBON (CN)</option>

                                <option  value="CNP">CIREBONPRUJAKAN (CNP)</option>

                                <option  value="KRW">KARANGSUWUNG (KRW)</option>

                                <option  value="LOS">LOSARI (LOS)</option>

                                <option  value="LWG">LUWUNG (LWG)</option>

                                <option  value="SDU">SINDANGLAUT (SDU)</option>

                                <option  value="WDW">WARUDUWUR (WDW)</option>
                            </optgroup>
                            <optgroup label="DELI SERDANG">
                                <option  value="LBP">LUBUKPAKAM (LBP)</option>
                            </optgroup>
                            <optgroup label="DEMAK">
                                <option  value="BBG">BRUMBUNG (BBG)</option>
                            </optgroup>
                            <optgroup label="DENPASAR">
                                <option  value="DEN">DENPASAR (DEN)</option>
                            </optgroup>
                            <optgroup label="GARUT">
                                <option  value="CB">CIBATU (CB)</option>

                                <option  value="CPD">CIPEUNDEUY (CPD)</option>

                                <option  value="LBJ">LEBAKJERO (LBJ)</option>

                                <option  value="LL">LELES (LL)</option>

                                <option  value="NG">NAGREG (NG)</option>

                                <option  value="WB">WARUNG BANDREK (WB)</option>
                            </optgroup>
                            <optgroup label="GOMBONG">
                                <option  value="GB">GOMBONG (GB)</option>

                                <option  value="IJ">IJO (IJ)</option>
                            </optgroup>
                            <optgroup label="GROBOGAN">
                                <option  value="GD">GUNDIH (GD)</option>

                                <option  value="KGT">KARANGJATI (KGT)</option>

                                <option  value="KEJ">KEDUNGJATI (KEJ)</option>

                                <option  value="KNN">KRADENAN (KNN)</option>

                                <option  value="NBO">NGROMBO (NBO)</option>
                            </optgroup>
                            <optgroup label="INDRAMAYU">
                                <option  value="CLH">CILEGEH (CLH)</option>

                                <option  value="HGL">HAURGEULIS (HGL)</option>

                                <option  value="JTB">JATIBARANG (JTB)</option>

                                <option  value="KAB">KADOKANGANGABUS (KAB)</option>

                                <option  value="KTM">KERTASEMAYA (KTM)</option>

                                <option  value="TIS">TERISI (TIS)</option>
                            </optgroup>
                            <optgroup label="JAKARTA">
                                <option  value="GMR">GAMBIR (GMR)</option>

                                <option  value="JAKK">JAKARTA KOTA (JAKK)</option>

                                <option  value="JNG">JATINEGARA (JNG)</option>

                                <option  value="MRI">MANGGARAI (MRI)</option>

                                <option  value="PSE">PASAR SENEN (PSE)</option>

                                <option  value="THB">TANAH ABANG (THB)</option>

                                <option  value="TPK">TANJUNG PRIUK (TPK)</option>
                            </optgroup>
                            <optgroup label="JATIBARANG">
                                <option  value="BDW">BANGODUWA (BDW)</option>
                            </optgroup>
                            <optgroup label="JEMBER">
                                <option  value="JTR">JATIROTO (JTR)</option>

                                <option  value="JR">JEMBER (JR)</option>

                                <option  value="KLT">KALISAT (KLT)</option>

                                <option  value="RBP">RAMBIPUJI (RBP)</option>

                                <option  value="TGL">TANGGUL (TGL)</option>
                            </optgroup>
                            <optgroup label="JOMBANG">
                                <option  value="JG">JOMBANG (JG)</option>

                                <option  value="SMB">SEMBUNG (SMB)</option>
                            </optgroup>
                            <optgroup label="KARAWANG">
                                <option  value="KW">KARAWANG (KW)</option>
                            </optgroup>
                            <optgroup label="KEBUMEN">
                                <option  value="KA">KARANGANYAR (KA)</option>

                                <option  value="KM">KEBUMEN (KM)</option>

                                <option  value="KWN">KUTOWINANGUN (KWN)</option>

                                <option  value="PRB">PREMBUN (PRB)</option>

                                <option  value="SRW">SRUWENG (SRW)</option>

                                <option  value="WNS">WONOSARI (WNS)</option>
                            </optgroup>
                            <optgroup label="KEDIRI">
                                <option  value="KD">KEDIRI (KD)</option>

                                <option  value="PPR">PAPAR (PPR)</option>
                            </optgroup>
                            <optgroup label="KENDAL">
                                <option  value="KBD">KALIBODRI (KBD)</option>

                                <option  value="KLN">KALIWUNGU (KLN)</option>

                                <option  value="WLR">WELERI (WLR)</option>
                            </optgroup>
                            <optgroup label="KISARAN">
                                <option  value="KIS">KISARAN (KIS)</option>
                            </optgroup>
                            <optgroup label="KLATEN">
                                <option  value="KT">KLATEN (KT)</option>

                                <option  value="SWT">SROWOT (SWT)</option>
                            </optgroup>
                            <optgroup label="KOTABUMI">
                                <option  value="MP">MARTAPURA (MP)</option>
                            </optgroup>
                            <optgroup label="KUTOARJO">
                                <option  value="KTA">KUTOARJO (KTA)</option>
                            </optgroup>
                            <optgroup label="LAHAT">
                                <option  value="BGM">BUNGAMAS (BGM)</option>

                                <option  value="LT">LAHAT (LT)</option>

                                <option  value="SNA">SAUNGNAGA (SNA)</option>

                                <option  value="TI">TEBINGTINGGI (TI)</option>
                            </optgroup>
                            <optgroup label="LAMONGAN">
                                <option  value="BBT">BABAT (BBT)</option>

                                <option  value="LMG">LAMONGAN (LMG)</option>
                            </optgroup>
                            <optgroup label="LAMPUNG">
                                <option  value="BKI">BEKRI (BKI)</option>

                                <option  value="BBU">BLAMBANGANUMPU (BBU)</option>

                                <option  value="GHM">GIHAM (GHM)</option>

                                <option  value="KB">KOTABUMI (KB)</option>

                                <option  value="TNK">TANJUNGKARANG (TNK)</option>

                                <option  value="TLY">TULUNGBUYUT (TLY)</option>
                            </optgroup>
                            <optgroup label="LEBAK">
                                <option  value="RK">RANGKAS BITUNG (RK)</option>
                            </optgroup>
                            <optgroup label="LUBUK LINGGAU">
                                <option  value="KOP">KOTAPADANG (KOP)</option>

                                <option  value="LLG">LUBUK LINGGAU (LLG)</option>

                                <option  value="MSL">MUARASALING (MSL)</option>
                            </optgroup>
                            <optgroup label="LUMAJANG">
                                <option  value="KK">KLAKAH (KK)</option>
                            </optgroup>
                            <optgroup label="MADIUN">
                                <option  value="CRB">CARUBAN (CRB)</option>

                                <option  value="MN">MADIUN (MN)</option>

                                <option  value="PA">PARON (PA)</option>

                                <option  value="SRD">SARADAN (SRD)</option>
                            </optgroup>
                            <optgroup label="MAGETAN">
                                <option  value="BAT">BARAT (BAT)</option>
                            </optgroup>
                            <optgroup label="MALANG">
                                <option  value="BMG">BLIMBING (BMG)</option>

                                <option  value="KPN">KEPANJEN (KPN)</option>

                                <option  value="LW">LAWANG (LW)</option>

                                <option  value="ML">MALANG (ML)</option>

                                <option  value="MLK">MALANG KOTA LAMA (MLK)</option>

                                <option  value="SBP">SUMBERPUCUNG (SBP)</option>
                            </optgroup>
                            <optgroup label="MEDAN">
                                <option  value="AKB">AEKLOBA (AKB)</option>

                                <option  value="BJL">BAJALINGGEI (BJL)</option>

                                <option  value="BAP">BANDARKALIPAH (BAP)</option>

                                <option  value="BDT">BANDARTINGGI (BDT)</option>

                                <option  value="BTK">BATANGKUIS (BTK)</option>

                                <option  value="DMR">DOLOKMERANGIR (DMR)</option>

                                <option  value="HL">HENGELO (HL)</option>

                                <option  value="LMP">LIMAPULUH (LMP)</option>

                                <option  value="MDN">MEDAN (MDN)</option>

                                <option  value="MBM">MEMBANGMUDA (MBM)</option>

                                <option  value="PHA">PADANGHALABAN (PHA)</option>

                                <option  value="PME">PAMINGKE (PME)</option>

                                <option  value="PBA">PERBAUNGAN (PBA)</option>

                                <option  value="PRA">PERLANAAN (PRA)</option>

                                <option  value="PUR">PULURAJA (PUR)</option>

                                <option  value="SBJ">SEI BEJANGKAR (SBJ)</option>

                                <option  value="TBI">TEBING TINGGI (TBI)</option>
                            </optgroup>
                            <optgroup label="MOJOKERTO">
                                <option  value="MR">MOJOKERTO (MR)</option>
                            </optgroup>
                            <optgroup label="MUARA ENIM">
                                <option  value="ME">MUARA ENIM (ME)</option>

                                <option  value="UJM">UJANMAS (UJM)</option>
                            </optgroup>
                            <optgroup label="NGANJUK">
                                <option  value="BGR">BAGOR (BGR)</option>

                                <option  value="BRN">BARON (BRN)</option>

                                <option  value="KTS">KERTOSONO (KTS)</option>

                                <option  value="NJ">NGANJUK (NJ)</option>

                                <option  value="WIL">WILANGAN (WIL)</option>
                            </optgroup>
                            <optgroup label="NGAWI">
                                <option  value="GG">GENENG (GG)</option>

                                <option  value="KG">KEDUNGGALAR (KG)</option>

                                <option  value="WK">WALIKUKUN (WK)</option>
                            </optgroup>
                            <optgroup label="PALEMBANG">
                                <option  value="KPT">KERTAPATI (KPT)</option>
                            </optgroup>
                            <optgroup label="PASURUAN">
                                <option  value="BG">BANGIL (BG)</option>

                                <option  value="GI">GRATI (GI)</option>

                                <option  value="PS">PASURUAN (PS)</option>
                            </optgroup>
                            <optgroup label="PEKALONGAN">
                                <option  value="BJG">BOJONG (BJG)</option>

                                <option  value="KNS">KRENGSENG (KNS)</option>

                                <option  value="PK">PEKALONGAN (PK)</option>

                                <option  value="PLB">PLABUAN (PLB)</option>

                                <option  value="SRI">SRAGI (SRI)</option>
                            </optgroup>
                            <optgroup label="PEMALANG">
                                <option  value="CO">COMAL (CO)</option>

                                <option  value="PML">PEMALANG (PML)</option>

                                <option  value="PTA">PETARUKAN (PTA)</option>
                            </optgroup>
                            <optgroup label="PEMATANG SIANTAR">
                                <option  value="SIR">SIANTAR (SIR)</option>
                            </optgroup>
                            <optgroup label="PONOROGO">
                                <option  value="BBD">BABADAN (BBD)</option>
                            </optgroup>
                            <optgroup label="PRABUMULIH">
                                <option  value="BIB">BLIMBINGPENDOPO (BIB)</option>

                                <option  value="GNM">GUNUNGMEGANG (GNM)</option>

                                <option  value="PBM">PRABUMULIH (PBM)</option>
                            </optgroup>
                            <optgroup label="PROBOLINGGO">
                                <option  value="LEC">LECES (LEC)</option>

                                <option  value="PB">PROBOLINGGO (PB)</option>
                            </optgroup>
                            <optgroup label="PURWAKARTA">
                                <option  value="PLD">PLERED (PLD)</option>

                                <option  value="PWK">PURWAKARTA (PWK)</option>
                            </optgroup>
                            <optgroup label="PURWOKERTO">
                                <option  value="PWT">PURWOKERTO (PWT)</option>
                            </optgroup>
                            <optgroup label="PURWOREJO">
                                <option  value="JN">JENAR (JN)</option>
                            </optgroup>
                            <optgroup label="RANTAU PRAPAT">
                                <option  value="MBU">MERBAU (MBU)</option>

                                <option  value="RAP">RANTAU PRAPAT (RAP)</option>
                            </optgroup>
                            <optgroup label="SEMARANG">
                                <option  value="SMC">SEMARANGPONCOL (SMC)</option>

                                <option  value="SMT">SEMARANGTAWANG (SMT)</option>
                            </optgroup>
                            <optgroup label="SERANG">
                                <option  value="SG">SERANG (SG)</option>
                            </optgroup>
                            <optgroup label="SERDANG BEDAGAI">
                                <option  value="RPH">RAMPAH (RPH)</option>
                            </optgroup>
                            <optgroup label="SIDOARJO">
                                <option  value="GDG">GEDANGAN (GDG)</option>

                                <option  value="KRN">KRIAN (KRN)</option>

                                <option  value="SPJ">SEPANJANG (SPJ)</option>

                                <option  value="SDA">SIDOARJO (SDA)</option>

                                <option  value="WR">WARU (WR)</option>
                            </optgroup>
                            <optgroup label="SOLO">
                                <option  value="PWS">PURWOSARI (PWS)</option>

                                <option  value="SLO">SOLOBALAPAN (SLO)</option>

                                <option  value="SK">SOLOJEBRES (SK)</option>
                            </optgroup>
                            <optgroup label="SRAGEN">
                                <option  value="KRO">KEBONROMO (KRO)</option>

                                <option  value="KDB">KEDUNGBANTENG (KDB)</option>

                                <option  value="MSR">MASARAN (MSR)</option>

                                <option  value="SR">SRAGEN (SR)</option>
                            </optgroup>
                            <optgroup label="SUBANG">
                                <option  value="CRA">CIPUNEGARA (CRA)</option>

                                <option  value="PGB">PEGADENBARU (PGB)</option>

                                <option  value="TJS">TANJUNGRASA (TJS)</option>
                            </optgroup>
                            <optgroup label="SUKABUMI">
                                <option  value="CBD">CIBADAK (CBD)</option>

                                <option  value="CCR">CICURUG (CCR)</option>

                                <option  value="CRG">CIREUNGAS (CRG)</option>

                                <option  value="CSA">CISAAT (CSA)</option>

                                <option  value="GDS">GANDASOLI (GDS)</option>

                                <option  value="KE">KARANG TENGAH (KE)</option>

                                <option  value="PRK">PARUNGKUDA (PRK)</option>

                                <option  value="SI">SUKABUMI (SI)</option>
                            </optgroup>
                            <optgroup label="SURABAYA">
                                <option  value="SGU">SURABAYA GUBENG (SGU)</option>

                                <option  value="SBI">SURABAYA PASAR TURI (SBI)</option>

                                <option  value="WO">WONOKROMO (WO)</option>
                            </optgroup>
                            <optgroup label="TANGERANG">
                                <option  value="TNG">TANGERANG (TNG)</option>
                            </optgroup>
                            <optgroup label="TANJUNG BALAI">
                                <option  value="TNB">TANJUNGBALAI (TNB)</option>
                            </optgroup>
                            <optgroup label="TASIKMALAYA">
                                <option  value="AW">AWIPARI (AW)</option>

                                <option  value="CAW">CIAWI (CAW)</option>

                                <option  value="MNJ">MANONJAYA (MNJ)</option>

                                <option  value="RJP">RAJAPOLAH (RJP)</option>

                                <option  value="TSM">TASIKMALAYA (TSM)</option>
                            </optgroup>
                            <optgroup label="TEGAL">
                                <option  value="PPK">PRUPUK (PPK)</option>

                                <option  value="SLW">SLAWI (SLW)</option>

                                <option  value="TG">TEGAL (TG)</option>
                            </optgroup>
                            <optgroup label="TULUNGAGUNG">
                                <option  value="NT">NGUNUT (NT)</option>

                                <option  value="TA">TULUNGAGUNG (TA)</option>
                            </optgroup>
                            <optgroup label="YOGYAKARTA">
                                <option  value="BBN">BRAMBANAN (BBN)</option>

                                <option  value="LPN">LEMPUYANGAN (LPN)</option>

                                <option  value="STL">SENTOLO (STL)</option>

                                <option  value="WT">WATES (WT)</option>

                                <option  value="YK">YOGYAKARTA (YK)</option>
                            </optgroup>
                        </select >
                    </div>
                    <div class="col-md-2 col-xs-12 form-group" style="text-align: center">
                        <div>&nbsp;</div>
                        <button type="button" class="btn btn-primary fa fa-exchange"></button>
                    </div>
                    <div class="col-md-5 col-xs-12 form-group">
                        <label for="tujuan_k"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Stasiun Tujuan</label>
                        <select name="tujuan_k" id="tujuan_k" class="form-control">
                            <option selected="selected" value="">&nbsp;&nbsp;Ke</option>
                            <optgroup label="BANDUNG">
                                <option  value="BD">BANDUNG (BD)</option>
                                <option  value="CCL">CICALENGKA (CCL)</option>
                                <option  value="CD">CIKADONGDONG (CD)</option>
                                <option  value="CMI">CIMAHI (CMI)</option>
                                <option  value="GDB">GEDEBAGE (GDB)</option>
                                <option  value="HRP">HAURPUGUR (HRP)</option>
                                <option  value="KAC">KIARACONDONG (KAC)</option>
                                <option  value="PDL">PADALARANG (PDL)</option>
                                <option  value="RCK">RANCAEKEK (RCK)</option>
                                <option  value="RH">RENDEH (RH)</option>
                            </optgroup>
                            <optgroup label="BANJAR">
                                <option  value="BJR">BANJAR (BJR)</option>
                                <option  value="LN">LANGEN (LN)</option>
                            </optgroup>
                            <optgroup label="BANYUMAS">
                                <option  value="KRR">KARANGSARI (KRR)</option>
                                <option  value="KBS">KEBASEN (KBS)</option>
                                <option  value="KJ">KEMRANJEN (KJ)</option>
                                <option  value="NTG">NOTOG (NTG)</option>
                                <option  value="SPH">SUMPIUH (SPH)</option>
                                <option  value="TBK">TAMBAK (TBK)</option>
                            </optgroup>
                            <optgroup label="BANYUWANGI">
                                <option  value="BW">BANYUWANGIBARU (BW)</option>
                                <option  value="GLM">GLENMORE (GLM)</option>
                                <option  value="KBR">KALIBARU (KBR)</option>
                                <option  value="KSL">KALISETAIL (KSL)</option>
                                <option  value="KNE">KARANGASEM (KNE)</option>
                                <option  value="RGP">ROGOJAMPI (RGP)</option>
                                <option  value="SWD">SUMBERWADUNG (SWD)</option>
                                <option  value="TGR">TEMUGURUH (TGR)</option>
                            </optgroup>
                            <optgroup label="BATANG">
                                <option  value="BTG">BATANG (BTG)</option>
                                <option  value="UJN">UJUNGNEGORO (UJN)</option>
                            </optgroup>
                            <optgroup label="BATURAJA">
                                <option  value="BTA">BATURAJA (BTA)</option>

                                <option  value="PNW">PANINJAWAN (PNW)</option>
                            </optgroup>
                            <optgroup label="BEKASI">
                                <option  value="BKS">BEKASI (BKS)</option>
                            </optgroup>
                            <optgroup label="BINJAI">
                                <option  value="BIJ">BINJAI (BIJ)</option>
                            </optgroup>
                            <optgroup label="BLITAR">
                                <option  value="BL">BLITAR (BL)</option>

                                <option  value="GRM">GARUM (GRM)</option>

                                <option  value="KSB">KESAMBEN (KSB)</option>

                                <option  value="TAL">TALUN (TAL)</option>

                                <option  value="WG">WLINGI (WG)</option>
                            </optgroup>
                            <optgroup label="BLORA">
                                <option  value="CU">CEPU (CU)</option>

                                <option  value="DPL">DOPLANG (DPL)</option>

                                <option  value="RBG">RANDUBLATUNG (RBG)</option>
                            </optgroup>
                            <optgroup label="BOGOR">
                                <option  value="BTT">BATU TULIS (BTT)</option>

                                <option  value="BOO">BOGOR (BOO)</option>

                                <option  value="CGB">CIGOMBONG (CGB)</option>

                                <option  value="MSG">MASENG (MSG)</option>

                                <option  value="PRP">PARUNGPANJANG (PRP)</option>
                            </optgroup>
                            <optgroup label="BOJONEGORO">
                                <option  value="BJ">BOJONEGORO (BJ)</option>

                                <option  value="KIT">KALITIDU (KIT)</option>

                                <option  value="SRJ">SUMBERREJO (SRJ)</option>
                            </optgroup>
                            <optgroup label="BOYOLALI">
                                <option  value="TW">TELAWA (TW)</option>
                            </optgroup>
                            <optgroup label="BREBES">
                                <option  value="BB">BREBES (BB)</option>

                                <option  value="BKA">BULAKAMBA (BKA)</option>

                                <option  value="BMA">BUMIAYU (BMA)</option>

                                <option  value="KGG">KETANGGUNGAN (KGG)</option>

                                <option  value="KGB">KETANGGUNGAN BARAT (KGB)</option>

                                <option  value="KRT">KRETEK (KRT)</option>

                                <option  value="LR">LARANGAN (LR)</option>

                                <option  value="LRA">LARANGAN (LRA)</option>

                                <option  value="LG">LINGGAPURA (LG)</option>

                                <option  value="PAT">PATUGURAN (PAT)</option>

                                <option  value="SGG">SONGGOM (SGG)</option>

                                <option  value="TGN">TANJUNG (TGN)</option>
                            </optgroup>
                            <optgroup label="CIAMIS">
                                <option  value="BJI">BANJARSARI (BJI)</option>

                                <option  value="CI">CIAMIS (CI)</option>
                            </optgroup>
                            <optgroup label="CIANJUR">
                                <option  value="CJ">CIANJUR (CJ)</option>

                                <option  value="CBB">CIBEBER (CBB)</option>

                                <option  value="CLK">CILAKU (CLK)</option>

                                <option  value="LP">LAMPEGAN (LP)</option>
                            </optgroup>
                            <optgroup label="CIKAMPEK">
                                <option  value="CKP">CIKAMPEK (CKP)</option>
                            </optgroup>
                            <optgroup label="CILACAP">
                                <option  value="CP">CILACAP (CP)</option>

                                <option  value="CPI">CIPARI (CPI)</option>

                                <option  value="GDM">GANDRUNGMANGUN (GDM)</option>

                                <option  value="GM">GUMILIR (GM)</option>

                                <option  value="JRL">JERUKLEGI (JRL)</option>

                                <option  value="KWG">KAWUNGANTEN (KWG)</option>

                                <option  value="KYA">KROYA (KYA)</option>

                                <option  value="LBG">LEBENG (LBG)</option>

                                <option  value="MA">MAOS (MA)</option>

                                <option  value="MLW">MELUWUNG (MLW)</option>

                                <option  value="SDR">SIDAREJA (SDR)</option>

                                <option  value="SKP">SIKAMPUH (SKP)</option>
                            </optgroup>
                            <optgroup label="CILEGON">
                                <option  value="CLG">CILEGON (CLG)</option>

                                <option  value="MER">MERAK (MER)</option>
                            </optgroup>
                            <optgroup label="CIREBON">
                                <option  value="AWN">ARJAWINANGUN (AWN)</option>

                                <option  value="BBK">BABAKAN (BBK)</option>

                                <option  value="CLD">CILEDUG (CLD)</option>

                                <option  value="CN">CIREBON (CN)</option>

                                <option  value="CNP">CIREBONPRUJAKAN (CNP)</option>

                                <option  value="KRW">KARANGSUWUNG (KRW)</option>

                                <option  value="LOS">LOSARI (LOS)</option>

                                <option  value="LWG">LUWUNG (LWG)</option>

                                <option  value="SDU">SINDANGLAUT (SDU)</option>

                                <option  value="WDW">WARUDUWUR (WDW)</option>
                            </optgroup>
                            <optgroup label="DELI SERDANG">
                                <option  value="LBP">LUBUKPAKAM (LBP)</option>
                            </optgroup>
                            <optgroup label="DEMAK">
                                <option  value="BBG">BRUMBUNG (BBG)</option>
                            </optgroup>
                            <optgroup label="DENPASAR">
                                <option  value="DEN">DENPASAR (DEN)</option>
                            </optgroup>
                            <optgroup label="GARUT">
                                <option  value="CB">CIBATU (CB)</option>

                                <option  value="CPD">CIPEUNDEUY (CPD)</option>

                                <option  value="LBJ">LEBAKJERO (LBJ)</option>

                                <option  value="LL">LELES (LL)</option>

                                <option  value="NG">NAGREG (NG)</option>

                                <option  value="WB">WARUNG BANDREK (WB)</option>
                            </optgroup>
                            <optgroup label="GOMBONG">
                                <option  value="GB">GOMBONG (GB)</option>

                                <option  value="IJ">IJO (IJ)</option>
                            </optgroup>
                            <optgroup label="GROBOGAN">
                                <option  value="GD">GUNDIH (GD)</option>

                                <option  value="KGT">KARANGJATI (KGT)</option>

                                <option  value="KEJ">KEDUNGJATI (KEJ)</option>

                                <option  value="KNN">KRADENAN (KNN)</option>

                                <option  value="NBO">NGROMBO (NBO)</option>
                            </optgroup>
                            <optgroup label="INDRAMAYU">
                                <option  value="CLH">CILEGEH (CLH)</option>

                                <option  value="HGL">HAURGEULIS (HGL)</option>

                                <option  value="JTB">JATIBARANG (JTB)</option>

                                <option  value="KAB">KADOKANGANGABUS (KAB)</option>

                                <option  value="KTM">KERTASEMAYA (KTM)</option>

                                <option  value="TIS">TERISI (TIS)</option>
                            </optgroup>
                            <optgroup label="JAKARTA">
                                <option  value="GMR">GAMBIR (GMR)</option>

                                <option  value="JAKK">JAKARTA KOTA (JAKK)</option>

                                <option  value="JNG">JATINEGARA (JNG)</option>

                                <option  value="MRI">MANGGARAI (MRI)</option>

                                <option  value="PSE">PASAR SENEN (PSE)</option>

                                <option  value="THB">TANAH ABANG (THB)</option>

                                <option  value="TPK">TANJUNG PRIUK (TPK)</option>
                            </optgroup>
                            <optgroup label="JATIBARANG">
                                <option  value="BDW">BANGODUWA (BDW)</option>
                            </optgroup>
                            <optgroup label="JEMBER">
                                <option  value="JTR">JATIROTO (JTR)</option>

                                <option  value="JR">JEMBER (JR)</option>

                                <option  value="KLT">KALISAT (KLT)</option>

                                <option  value="RBP">RAMBIPUJI (RBP)</option>

                                <option  value="TGL">TANGGUL (TGL)</option>
                            </optgroup>
                            <optgroup label="JOMBANG">
                                <option  value="JG">JOMBANG (JG)</option>

                                <option  value="SMB">SEMBUNG (SMB)</option>
                            </optgroup>
                            <optgroup label="KARAWANG">
                                <option  value="KW">KARAWANG (KW)</option>
                            </optgroup>
                            <optgroup label="KEBUMEN">
                                <option  value="KA">KARANGANYAR (KA)</option>

                                <option  value="KM">KEBUMEN (KM)</option>

                                <option  value="KWN">KUTOWINANGUN (KWN)</option>

                                <option  value="PRB">PREMBUN (PRB)</option>

                                <option  value="SRW">SRUWENG (SRW)</option>

                                <option  value="WNS">WONOSARI (WNS)</option>
                            </optgroup>
                            <optgroup label="KEDIRI">
                                <option  value="KD">KEDIRI (KD)</option>

                                <option  value="PPR">PAPAR (PPR)</option>
                            </optgroup>
                            <optgroup label="KENDAL">
                                <option  value="KBD">KALIBODRI (KBD)</option>

                                <option  value="KLN">KALIWUNGU (KLN)</option>

                                <option  value="WLR">WELERI (WLR)</option>
                            </optgroup>
                            <optgroup label="KISARAN">
                                <option  value="KIS">KISARAN (KIS)</option>
                            </optgroup>
                            <optgroup label="KLATEN">
                                <option  value="KT">KLATEN (KT)</option>

                                <option  value="SWT">SROWOT (SWT)</option>
                            </optgroup>
                            <optgroup label="KOTABUMI">
                                <option  value="MP">MARTAPURA (MP)</option>
                            </optgroup>
                            <optgroup label="KUTOARJO">
                                <option  value="KTA">KUTOARJO (KTA)</option>
                            </optgroup>
                            <optgroup label="LAHAT">
                                <option  value="BGM">BUNGAMAS (BGM)</option>

                                <option  value="LT">LAHAT (LT)</option>

                                <option  value="SNA">SAUNGNAGA (SNA)</option>

                                <option  value="TI">TEBINGTINGGI (TI)</option>
                            </optgroup>
                            <optgroup label="LAMONGAN">
                                <option  value="BBT">BABAT (BBT)</option>

                                <option  value="LMG">LAMONGAN (LMG)</option>
                            </optgroup>
                            <optgroup label="LAMPUNG">
                                <option  value="BKI">BEKRI (BKI)</option>

                                <option  value="BBU">BLAMBANGANUMPU (BBU)</option>

                                <option  value="GHM">GIHAM (GHM)</option>

                                <option  value="KB">KOTABUMI (KB)</option>

                                <option  value="TNK">TANJUNGKARANG (TNK)</option>

                                <option  value="TLY">TULUNGBUYUT (TLY)</option>
                            </optgroup>
                            <optgroup label="LEBAK">
                                <option  value="RK">RANGKAS BITUNG (RK)</option>
                            </optgroup>
                            <optgroup label="LUBUK LINGGAU">
                                <option  value="KOP">KOTAPADANG (KOP)</option>

                                <option  value="LLG">LUBUK LINGGAU (LLG)</option>

                                <option  value="MSL">MUARASALING (MSL)</option>
                            </optgroup>
                            <optgroup label="LUMAJANG">
                                <option  value="KK">KLAKAH (KK)</option>
                            </optgroup>
                            <optgroup label="MADIUN">
                                <option  value="CRB">CARUBAN (CRB)</option>

                                <option  value="MN">MADIUN (MN)</option>

                                <option  value="PA">PARON (PA)</option>

                                <option  value="SRD">SARADAN (SRD)</option>
                            </optgroup>
                            <optgroup label="MAGETAN">
                                <option  value="BAT">BARAT (BAT)</option>
                            </optgroup>
                            <optgroup label="MALANG">
                                <option  value="BMG">BLIMBING (BMG)</option>

                                <option  value="KPN">KEPANJEN (KPN)</option>

                                <option  value="LW">LAWANG (LW)</option>

                                <option  value="ML">MALANG (ML)</option>

                                <option  value="MLK">MALANG KOTA LAMA (MLK)</option>

                                <option  value="SBP">SUMBERPUCUNG (SBP)</option>
                            </optgroup>
                            <optgroup label="MEDAN">
                                <option  value="AKB">AEKLOBA (AKB)</option>

                                <option  value="BJL">BAJALINGGEI (BJL)</option>

                                <option  value="BAP">BANDARKALIPAH (BAP)</option>

                                <option  value="BDT">BANDARTINGGI (BDT)</option>

                                <option  value="BTK">BATANGKUIS (BTK)</option>

                                <option  value="DMR">DOLOKMERANGIR (DMR)</option>

                                <option  value="HL">HENGELO (HL)</option>

                                <option  value="LMP">LIMAPULUH (LMP)</option>

                                <option  value="MDN">MEDAN (MDN)</option>

                                <option  value="MBM">MEMBANGMUDA (MBM)</option>

                                <option  value="PHA">PADANGHALABAN (PHA)</option>

                                <option  value="PME">PAMINGKE (PME)</option>

                                <option  value="PBA">PERBAUNGAN (PBA)</option>

                                <option  value="PRA">PERLANAAN (PRA)</option>

                                <option  value="PUR">PULURAJA (PUR)</option>

                                <option  value="SBJ">SEI BEJANGKAR (SBJ)</option>

                                <option  value="TBI">TEBING TINGGI (TBI)</option>
                            </optgroup>
                            <optgroup label="MOJOKERTO">
                                <option  value="MR">MOJOKERTO (MR)</option>
                            </optgroup>
                            <optgroup label="MUARA ENIM">
                                <option  value="ME">MUARA ENIM (ME)</option>

                                <option  value="UJM">UJANMAS (UJM)</option>
                            </optgroup>
                            <optgroup label="NGANJUK">
                                <option  value="BGR">BAGOR (BGR)</option>

                                <option  value="BRN">BARON (BRN)</option>

                                <option  value="KTS">KERTOSONO (KTS)</option>

                                <option  value="NJ">NGANJUK (NJ)</option>

                                <option  value="WIL">WILANGAN (WIL)</option>
                            </optgroup>
                            <optgroup label="NGAWI">
                                <option  value="GG">GENENG (GG)</option>

                                <option  value="KG">KEDUNGGALAR (KG)</option>

                                <option  value="WK">WALIKUKUN (WK)</option>
                            </optgroup>
                            <optgroup label="PALEMBANG">
                                <option  value="KPT">KERTAPATI (KPT)</option>
                            </optgroup>
                            <optgroup label="PASURUAN">
                                <option  value="BG">BANGIL (BG)</option>

                                <option  value="GI">GRATI (GI)</option>

                                <option  value="PS">PASURUAN (PS)</option>
                            </optgroup>
                            <optgroup label="PEKALONGAN">
                                <option  value="BJG">BOJONG (BJG)</option>

                                <option  value="KNS">KRENGSENG (KNS)</option>

                                <option  value="PK">PEKALONGAN (PK)</option>

                                <option  value="PLB">PLABUAN (PLB)</option>

                                <option  value="SRI">SRAGI (SRI)</option>
                            </optgroup>
                            <optgroup label="PEMALANG">
                                <option  value="CO">COMAL (CO)</option>

                                <option  value="PML">PEMALANG (PML)</option>

                                <option  value="PTA">PETARUKAN (PTA)</option>
                            </optgroup>
                            <optgroup label="PEMATANG SIANTAR">
                                <option  value="SIR">SIANTAR (SIR)</option>
                            </optgroup>
                            <optgroup label="PONOROGO">
                                <option  value="BBD">BABADAN (BBD)</option>
                            </optgroup>
                            <optgroup label="PRABUMULIH">
                                <option  value="BIB">BLIMBINGPENDOPO (BIB)</option>

                                <option  value="GNM">GUNUNGMEGANG (GNM)</option>

                                <option  value="PBM">PRABUMULIH (PBM)</option>
                            </optgroup>
                            <optgroup label="PROBOLINGGO">
                                <option  value="LEC">LECES (LEC)</option>

                                <option  value="PB">PROBOLINGGO (PB)</option>
                            </optgroup>
                            <optgroup label="PURWAKARTA">
                                <option  value="PLD">PLERED (PLD)</option>

                                <option  value="PWK">PURWAKARTA (PWK)</option>
                            </optgroup>
                            <optgroup label="PURWOKERTO">
                                <option  value="PWT">PURWOKERTO (PWT)</option>
                            </optgroup>
                            <optgroup label="PURWOREJO">
                                <option  value="JN">JENAR (JN)</option>
                            </optgroup>
                            <optgroup label="RANTAU PRAPAT">
                                <option  value="MBU">MERBAU (MBU)</option>

                                <option  value="RAP">RANTAU PRAPAT (RAP)</option>
                            </optgroup>
                            <optgroup label="SEMARANG">
                                <option  value="SMC">SEMARANGPONCOL (SMC)</option>

                                <option  value="SMT">SEMARANGTAWANG (SMT)</option>
                            </optgroup>
                            <optgroup label="SERANG">
                                <option  value="SG">SERANG (SG)</option>
                            </optgroup>
                            <optgroup label="SERDANG BEDAGAI">
                                <option  value="RPH">RAMPAH (RPH)</option>
                            </optgroup>
                            <optgroup label="SIDOARJO">
                                <option  value="GDG">GEDANGAN (GDG)</option>

                                <option  value="KRN">KRIAN (KRN)</option>

                                <option  value="SPJ">SEPANJANG (SPJ)</option>

                                <option  value="SDA">SIDOARJO (SDA)</option>

                                <option  value="WR">WARU (WR)</option>
                            </optgroup>
                            <optgroup label="SOLO">
                                <option  value="PWS">PURWOSARI (PWS)</option>

                                <option  value="SLO">SOLOBALAPAN (SLO)</option>

                                <option  value="SK">SOLOJEBRES (SK)</option>
                            </optgroup>
                            <optgroup label="SRAGEN">
                                <option  value="KRO">KEBONROMO (KRO)</option>

                                <option  value="KDB">KEDUNGBANTENG (KDB)</option>

                                <option  value="MSR">MASARAN (MSR)</option>

                                <option  value="SR">SRAGEN (SR)</option>
                            </optgroup>
                            <optgroup label="SUBANG">
                                <option  value="CRA">CIPUNEGARA (CRA)</option>

                                <option  value="PGB">PEGADENBARU (PGB)</option>

                                <option  value="TJS">TANJUNGRASA (TJS)</option>
                            </optgroup>
                            <optgroup label="SUKABUMI">
                                <option  value="CBD">CIBADAK (CBD)</option>

                                <option  value="CCR">CICURUG (CCR)</option>

                                <option  value="CRG">CIREUNGAS (CRG)</option>

                                <option  value="CSA">CISAAT (CSA)</option>

                                <option  value="GDS">GANDASOLI (GDS)</option>

                                <option  value="KE">KARANG TENGAH (KE)</option>

                                <option  value="PRK">PARUNGKUDA (PRK)</option>

                                <option  value="SI">SUKABUMI (SI)</option>
                            </optgroup>
                            <optgroup label="SURABAYA">
                                <option  value="SGU">SURABAYA GUBENG (SGU)</option>

                                <option  value="SBI">SURABAYA PASAR TURI (SBI)</option>

                                <option  value="WO">WONOKROMO (WO)</option>
                            </optgroup>
                            <optgroup label="TANGERANG">
                                <option  value="TNG">TANGERANG (TNG)</option>
                            </optgroup>
                            <optgroup label="TANJUNG BALAI">
                                <option  value="TNB">TANJUNGBALAI (TNB)</option>
                            </optgroup>
                            <optgroup label="TASIKMALAYA">
                                <option  value="AW">AWIPARI (AW)</option>

                                <option  value="CAW">CIAWI (CAW)</option>

                                <option  value="MNJ">MANONJAYA (MNJ)</option>

                                <option  value="RJP">RAJAPOLAH (RJP)</option>

                                <option  value="TSM">TASIKMALAYA (TSM)</option>
                            </optgroup>
                            <optgroup label="TEGAL">
                                <option  value="PPK">PRUPUK (PPK)</option>

                                <option  value="SLW">SLAWI (SLW)</option>

                                <option  value="TG">TEGAL (TG)</option>
                            </optgroup>
                            <optgroup label="TULUNGAGUNG">
                                <option  value="NT">NGUNUT (NT)</option>

                                <option  value="TA">TULUNGAGUNG (TA)</option>
                            </optgroup>
                            <optgroup label="YOGYAKARTA">
                                <option  value="BBN">BRAMBANAN (BBN)</option>

                                <option  value="LPN">LEMPUYANGAN (LPN)</option>

                                <option  value="STL">SENTOLO (STL)</option>

                                <option  value="WT">WATES (WT)</option>

                                <option  value="YK">YOGYAKARTA (YK)</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="radio-inline"><input type="radio" name="optradio_k" value="sj" checked="true">Sekali Jalan</label>
                        <label class="radio-inline"><input type="radio" name="optradio_k" value="pp">Pulang Pergi</label>
                    </div>    
                    <div class="col-md-12 col-xs-12 form-group">
                        <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Keberangkatan</p>
                        <input type="date" name="dateb_k" class="form-control" placeholder="" tabindex="3">
                    </div>
                    <div class="col-md-12 col-xs-12 form-group hidden" id="pulang_k">
                        <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Kepulangan</p>
                        <input type="date" name="datep_k" class="form-control" placeholder="" tabindex="4">
                    </div>
                    <div class="col-md-6 col-xs-6 form-group no-padding">
                        <label for="jml_dewasa_k"><i class="fa fa-user"></i>&nbsp;&nbsp;Dewasa</label>
                        <select id="jml_dewasa_k" name="jml_dewasa_k" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-xs-6 form-group no-padding">
                        <label for="jml_anak_k"><i class="fa fa-user"></i>&nbsp;&nbsp;Anak</label>
                        <select id="jml_anak_k" name="jml_anak_k" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <h3 style="text-align: center">Pesan ke :</h3>
                    <div class="col-md-12 col-xs-12 btn-group">
                        <button id="admin1_k" type="button" class="btn btn-success fa fa-whatsapp" style="width: 50%">&nbsp;&nbsp;ADMIN 1</button>
                        <button id="admin2_k" type="button" class="btn btn-success fa fa-whatsapp" style="width: 50%">&nbsp;&nbsp;ADMIN 2</button>
                    </div>
                </form>
                <div style="height: 60px"></div>
            </div>
            <div class="tab-pane" id="railink">
                <form id="railink_r" name="railink_r" action="" method="post">
                    <div class="col-md-5 col-xs-12 form-group">
                        <label for="asal_r"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Stasiun Asal</label>
                        <select name="asal_r" id="asal_r" class="form-control">
                            <option selected="selected" value="" >&nbsp;&nbsp;Dari</option>
                            <option value="Medan (Medan MDN)">Medan (Medan MDN)</option>
                            <option value="Medan (Kualanamnu KLN)">Medan (Kualanamnu KLN)</option>
                        </select >
                    </div>
                    <div class="col-md-2 col-xs-12 form-group" style="text-align: center">
                        <div>&nbsp;</div>
                        <button type="button" class="btn btn-primary fa fa-exchange"></button>
                    </div>
                    <div class="col-md-5 col-xs-12 form-group">
                        <label for="tujuan_r"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Stasiun Tujuan</label>
                        <select name="tujuan_r" id="tujuan_r" class="form-control">
                            <option selected="selected" value="" >&nbsp;&nbsp;Ke</option>
                            <option value="Medan (Medan MDN)">Medan (Medan MDN)</option>
                            <option value="Medan (Kualanamnu KLN)">Medan (Kualanamnu KLN)</option>
                        </select>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="radio-inline"><input type="radio" name="optradio_r" value="sj" checked="true">Sekali Jalan</label>
                        <label class="radio-inline"><input type="radio" name="optradio_r" value="pp">Pulang Pergi</label>
                    </div>    
                    <div class="col-md-12 col-xs-12 form-group">
                        <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Keberangkatan</p>
                        <input type="date" name="dateb_r" class="form-control" placeholder="" tabindex="3">
                    </div>
                    <div class="col-md-12 col-xs-12 form-group hidden" id="pulang_r">
                        <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Kepulangan</p>
                        <input type="date" name="datep_r" class="form-control" placeholder="" tabindex="4">
                    </div>
                    <div class="col-md-6 col-xs-6 form-group no-padding">
                        <label for="jml_dewasa_r"><i class="fa fa-user"></i>&nbsp;&nbsp;Dewasa</label>
                        <select id="jml_dewasa_r" name="jml_dewasa_r" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-xs-6 form-group no-padding">
                        <label for="jml_anak_r"><i class="fa fa-user"></i>&nbsp;&nbsp;Anak</label>
                        <select id="jml_anak_r" name="jml_anak_r" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <h3 style="text-align: center">Pesan ke :</h3>
                    <div class="col-md-12 col-xs-12 btn-group">
                        <button id="admin1_r" type="button" class="btn btn-success fa fa-whatsapp" style="width: 50%">&nbsp;&nbsp;ADMIN 1</button>
                        <button id="admin2_r" type="button" class="btn btn-success fa fa-whatsapp" style="width: 50%">&nbsp;&nbsp;ADMIN 2</button>
                    </div>
                </form>
                <div style="height: 60px"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#btn_train').click(function () {
            $('#btn_railink').removeClass('active');
            $('#btn_railink').removeClass('btn-info');
            $('#btn_railink').addClass('btn-default');
            $('#btn_train').addClass('btn-info');
            $('#btn_train').addClass('active');
        });
        $('#btn_railink').click(function () {
            $('#btn_train').removeClass('active');
            $('#btn_train').removeClass('btn-info');
            $('#btn_train').addClass('btn-default');
            $('#btn_railink').addClass('btn-info');
            $('#btn_railink').addClass('active');
        });
        $('input[name="optradio_k"]').change(function (e) {
            if (this.value === 'sj') {
                $('#pulang_k').addClass('hidden');
            }
            if (this.value === 'pp') {
                $('#pulang_k').removeClass('hidden');
            }
        });
        $('input[name="optradio_r"]').change(function (e) {
            if (this.value === 'sj') {
                $('#pulang_r').addClass('hidden');
            }
            if (this.value === 'pp') {
                $('#pulang_r').removeClass('hidden');
            }
        });
        $('#admin1_k').click(function () {
            var asal_k = $("#kereta_k select[name=asal_k]").val();
            var tujuan_k = $("#kereta_k select[name=tujuan_k]").val();
            var dateb_k = $("#kereta_k input[name=dateb_k]").val();
            var datep_k = $("#kereta_k input[name=datep_k]").val();
            var jml_dewasa_k = $("#kereta_k select[name=jml_dewasa_k]").val();
            var jml_anak_k = $("#kereta_k select[name=jml_anak_k]").val();
            
            var postData = {
                'type': 'kereta',
                'asal_k': asal_k,
                'tujuan_k': tujuan_k,
                'dateb_k': dateb_k,
                'datep_k': datep_k,
                'jml_dewasa_k': jml_dewasa_k,
                'jml_anak_k': jml_anak_k,
                'admin': 'admin_1'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_kereta",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_k !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20beli tiket kereta dari' + asal_k +  ' ke '+ tujuan_k + ' tanggal keberangkatan ' + dateb_k + ' tanggal pulang' + datep_k + ' penumpang dewasa ' + jml_dewasa_k + ' penumpang anak ' + jml_anak_k + '%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
        
        $('#admin2_k').click(function () {
            var asal_k = $("#kereta_k select[name=asal_k]").val();
            var tujuan_k = $("#kereta_k select[name=tujuan_k]").val();
            var dateb_k = $("#kereta_k input[name=dateb_k]").val();
            var datep_k = $("#kereta_k input[name=datep_k]").val();
            var jml_dewasa_k = $("#kereta_k select[name=jml_dewasa_k]").val();
            var jml_anak_k = $("#kereta_k select[name=jml_anak_k]").val();
            
            var postData = {
                'type': 'kereta',
                'asal_k': asal_k,
                'tujuan_k': tujuan_k,
                'dateb_k': dateb_k,
                'datep_k': datep_k,
                'jml_dewasa_k': jml_dewasa_k,
                'jml_anak_k': jml_anak_k,
                'admin': 'admin_2'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_kereta",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_k !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20beli tiket kereta dari' + asal_k +  ' ke '+ tujuan_k + ' tanggal keberangkatan ' + dateb_k + ' tanggal pulang' + datep_k + ' penumpang dewasa ' + jml_dewasa_k + ' penumpang anak ' + jml_anak_k + '%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
        
        $('#admin1_r').click(function () {
            var asal_r = $("#railink_r select[name=asal_r]").val();
            var tujuan_r = $("#railink_r select[name=tujuan_r]").val();
            var dateb_r = $("#railink_r input[name=dateb_r]").val();
            var datep_r = $("#railink_r input[name=datep_r]").val();
            var jml_dewasa_r = $("#railink_r select[name=jml_dewasa_r]").val();
            var jml_anak_r = $("#railink_r select[name=jml_anak_r]").val();
            
            var postData = {
                'type': 'railink',
                'asal_r': asal_r,
                'tujuan_r': tujuan_r,
                'dateb_r': dateb_r,
                'datep_r': datep_r,
                'jml_dewasa_r': jml_dewasa_r,
                'jml_anak_r': jml_anak_r,
                'admin': 'admin_1'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_railink",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_r !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20beli tiket railink dari' + asal_r +  ' ke '+ tujuan_r + ' tanggal keberangkatan ' + dateb_r + ' tanggal pulang' + datep_r + ' penumpang dewasa ' + jml_dewasa_r + ' penumpang anak ' + jml_anak_r +'%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
        
        $('#admin2_r').click(function () {
            var asal_r = $("#railink_r select[name=asal_r]").val();
            var tujuan_r = $("#railink_r select[name=tujuan_r]").val();
            var dateb_r = $("#railink_r input[name=dateb_r]").val();
            var datep_r = $("#railink_r input[name=datep_r]").val();
            var jml_dewasa_r = $("#railink_r select[name=jml_dewasa_r]").val();
            var jml_anak_r = $("#railink_r select[name=jml_anak_r]").val();
            
            var postData = {
                'type': 'railink',
                'asal_r': asal_r,
                'tujuan_r': tujuan_r,
                'dateb_r': dateb_r,
                'datep_r': datep_r,
                'jml_dewasa_r': jml_dewasa_r,
                'jml_anak_r': jml_anak_r,
                'admin': 'admin_2'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_railink",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_r !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20beli tiket railink dari' + asal_r +  ' ke '+ tujuan_r + ' tanggal keberangkatan ' + dateb_r + ' tanggal pulang' + datep_r + ' penumpang dewasa ' + jml_dewasa_r + ' penumpang anak ' + jml_anak_r +'%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
    });
</script>
<?php $this->view('template/foot_only'); ?>