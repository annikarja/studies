<table class="productTable">
    <thead>   
        <tr>   
            <th>Numero</th>   
            <th>Nimi</th>   
            <th>Valmistaja</th>   
            <th>Pullokoko</th>   
            <th>Hinta</th>   
            <th>Litrahinta</th>   
            <th>Tyyppi</th>   
            <th>Valmistusmaa</th>   
            <th>Vuosikerta</th>   
            <th>Alkoholi-%</th>   
            <th>Energia kcal/100ml</th>   
        </tr>   
    </thead> 
        <tbody>   
            <?php     
            while ($row = mysqli_fetch_array($result)) {   
            ?>     
            <tr>
            <td><?php echo $row["numero"]; ?></td>     
            <td><?php echo $row["nimi"]; ?></td>   
            <td><?php echo ($row["valmistaja"] == "NULL") ? "" : $row["valmistaja"]; ?></td>   
            <td><?php echo ($row["pullokoko"] == "NULL") ? "" : $row["pullokoko"]; ?></td> 
            <td><?php echo ($row["hinta"] == "NULL") ? "" : $row["hinta"]; ?> €</td>                                          
            <td><?php echo ($row["litrahinta"] == "NULL") ? "" : $row['litrahinta']; ?> €/l</td>   
            <td><?php echo ($row["tyyppi"] == "NULL") ? "" : $row["tyyppi"]; ?></td>                                          
            <td><?php echo ($row["valmistusmaa"] == "NULL") ? "" : $row["valmistusmaa"]; ?></td>                                        
            <td><?php echo ($row["vuosikerta"] == "NULL") ? "" : $row["vuosikerta"]; ?></td>                                          
            <td><?php echo ($row["alkoholi"] == "NULL") ? "" : $row["alkoholi"]; ?></td>                                           
            <td><?php echo ($row["energia"] == "NULL") ? "" : $row["energia"]; ?></td>
            </tr>     
            <?php     
            };    
            ?>     
          </tbody>     
</table>