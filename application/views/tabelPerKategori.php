<!--begin::Table-->
<table id="tabelKategori" class="table border border-dashed border-gray-400 table-row-dashed table-row-gray-400 align-middle gs-0 gy-4">
    <!--begin::Table head-->
    <thead class="fs-5">
        <tr class="fw-bolder text-gray-800">
            <th class="w-50px text-center align-middle">
                No
            </th>
            <th class="min-w-200px text-start align-middle">Kategori</th>
            <?php
            foreach ($alpa as $v) {
                if ($v!=0.9){
            ?>
                <th class="text-center"><?= $v ?></th>
            <?php
                }
                else {
            ?>
                <th style="background-color: yellow;" class="text-center"><?= $v ?></th>
            <?php 
                }
            }
            ?>
        </tr>
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="fs-6">
        <?php
        $n = 1;
        $j = 0;
        foreach ($kategori as $val) {
        ?>
            <tr>
                <td class="text-center"><?= $n ?></td>
                <td class="text-start"><?= $val->kategori ?></td>
                <?php
                $k=0;
                foreach ($mape[$j] as $v) {
                    
                    if ($k<8){
                ?>
                    <td class="text-center"><?= number_format($v, 2) ?></td>
                <?php
                    }
                    else {
                ?>
                    <td style="background-color: yellow;" class="text-center"><?= number_format($v, 2) ?></td>
                <?php
                    }
                    $k++;
                }
                ?>
            </tr>
        <?php
            $n++;
            $j++;
        }
        ?>
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->