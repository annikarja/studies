<table class="filterTable">
    <tr class="filterTR">
        <td class="filterTD" >Tyyppi</td>
        <td class="filterTD" >Valmistusmaa</td>
        <td class="filterTD" >Hinta, ylä- ja alaraja</td>
        <td class="filterTD" >Energia, ylä- ja alaraja</td>
    </tr>
    <tr class="filterTR">
        <td class="filterTD" id='tyyppi'>

            <select name="tyyppi" form="filters">
                <option></option>
                <option value="juomasekoitukset">Juomasekoitukset</option>
                <option value="oluet">Oluet</option>
                <option value="lahja- ja juomatarvikkeet">Lahja- ja juomatarvikkeet</option>
                <option value="vodkat">Vodkat ja viinat</option>
                <option value="ginit">Ginit ja maustetut viinat</option>
                <option value="brandyt">Brandyt, armanjakit ja calvadosit</option>
                <option value="konjakit">Konjakit</option>
                <option value="viskit">Viskit</option>
                <option value="rommit">Rommit</option>
                <option value="liköörit">Liköörit ja katkerot</option>
                <option value="jälkiruokaviinit">Jälkiruokaviinit, väkevöidyt ja muut viinit</option>
                <option value="punaviinit">Punaviinit</option>
                <option value="valkoviinit">Valkoviinit</option>
                <option value="roseeviinit">Roseeviinit</option>
                <option value="kuohuviinit">Kuohuviinit & samppanjat</option>
                <option value="siiderit">Siiderit</option>
                <option value="alkoholittomat">Alkoholittomat</option>
                <option value="null">Muut</option>
            </select>
        </td>
        <td class="filterTD" id='maat'>

            <select name="maa" form="filters">	
                <option></option>
                <option value="argentiina">Argentiina</option>
                <option value="australia">Australia</option>
                <option value="bolivia">Bolivia</option>		
                <option value="bulgaria">Bulgaria</option>
                <option value="chile">Chile</option>	
                <option value="englanti">Englanti</option>	
                <option value="espanja">Espanja</option>	
                <option value="euroopan unioni">Euroopan unioni</option>	
                <option value="georgia">Georgia</option>	
                <option value="intia">Intia</option>	
                <option value="israel">israel</option>	
                <option value="italia">Italia</option>	
                <option value="itävalta">Itävalta</option>	
                <option value="kanada">Kanada</option>	
                <option value="kiina">Kiina</option>
                <option value="kreikka">Kreikka</option>
                <option value="kroatia">Kroatia</option>
                <option value="libanon">Libanon</option>
                <option value="luxemburg">Luxemburg</option>
                <option value="meksiko">Meksiko</option>
                <option value="moldova">Moldova</option>
                <option value="montenegro">Montenegro</option>
                <option value="muu alkuperämaa">Muu alkuperämaa</option>
                <option value="peru">Peru</option>
                <option value="portugali">Portugali</option>
                <option value="ranska">Ranska</option>
                <option value="romania">Romania</option>
                <option value="ruotsi">Ruotsi</option>
                <option value="saksa">Saksa</option>
                <option value="serbia">Serbia</option>
                <option value="slovakia">Slovakia</option>
                <option value="slovenia">Slovenia</option>
                <option value="sveitsi">Sveitsi</option>
                <option value="tsekki">Tsekki</option>
                <option value="turkki">Turkki</option>
                <option value="unkari">Unkari</option>
                <option value="uruguay">Uruguay</option>
                <option value="uusi-seelanti">Uusi-Seelanti</option>	
                <option value="venäjä">Venäjä</option>
                <option value="yhdysvallat">Yhdysvallat</option>
                <option value="japani">Japani</option>
                <option value="kypros">Kypros</option>
                <option value="pohjois-makedonia">Pohjois-Makedonia</option>
                <option value="suomi">Suomi</option>
                <option value="alkuperämaa vaihtelee">Alkuperämaa vaihtelee</option>
                <option value="bahamasaaret">Bahamasaaret</option>
                <option value="barbados">Barbados</option>
                <option value="bermuda">Bermuda</option>
                <option value="dominikaaninen tasavalta">Dominikaaninen tasavalta</option>
                <option value="guatemala">Guatemala</option>
                <option value="guyana">Guyana</option>
                <option value="hollanti">Hollanti</option>
                <option value="jamaika">Jamaika</option>
                <option value="kuuba">Kuuba</option>
                <option value="liettua">Liettua</option>
                <option value="martinique">Martinique</option>
                <option value="mauritius">Mauritius</option>
                <option value="nicaragua">Nicaragua</option>
                <option value="panama">Panama</option>
                <option value="puerto rico">Puerto Rico</option>
                <option value="skotlanti">Skotlanti</option>
                <option value="tanska">Tanska</option>
                <option value="trinidad ja tobago">Trinidad ja Tobago</option>
                <option value="venezuela">Venezuela</option>
                <option value="viro">Viro</option>
                <option value="belgia">Belgia</option>
                <option value="irlanti">Irlanti</option>
                <option value="norja">Norja</option>
                <option value="islanti">Islanti</option>
                <option value="latvia">Latvia</option>
                <option value="puola">Puola</option>
                <option value="thaimaa">Thaimaa</option>
                <option value="vietnam">Vietnam</option>
                <option value="wales">Wales</option>
                <option value="azerbaidzhan">Azerbaidzhan</option>
                <option value="brasilia">Brasilia</option>
                <option value="etelä-korea">Etelä-Korea</option>
                <option value="ukraina">Ukraina</option>
            </select>
        </td>		
    <form action="index.php" id="filters" method="get">

        <td class="filterTD">   <input id="hinta" type="number" name="hinta-ala"> - <input type="number" name="hinta-yla"></td>
        <td class="filterTD">   <input id="energia" type="number" name="energia-yla"> - <input type="number" name="energia-yla"></td>
        <td class="filterTD">
            <input type="submit" name="submit" value="Suodata">
        </td>
        <td class="filterTD">
            <input type="submit" name="tyhjenna" value="Tyhjennä">
        </td>
        </tr>
    </form>
</table>
