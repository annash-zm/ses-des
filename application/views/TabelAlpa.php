<!--begin::Table-->
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <!--begin::Table head-->
    <thead class="fs-5">
        <tr class="fw-bolder text-gray-800">
            <th class="w-100px text-center">
                No
            </th>
            <th class="min-w-120px text-center">Nilai Aktual</th>
            <?php 
                foreach ($alpa as $v){
            ?>
                <th class="text-center"><?= $v ?></th>
            <?php
                }
            ?>
        </tr>
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="fs-6">
        <?php 
            $n=1; $j=0;
            foreach ($dataAktual as $val){
        ?>
            <tr>
                <td class="text-center"><?= $n ?></td>
                <td class="text-center"><?= $val ?></td>
                <?php 
                    for ($i=0; $i<=count($dataPrediksi); $i++){
                ?>
                    <td class="text-center"><?= $dataPrediksi[$j][$i] ?></td>
                <?php
                    }
                ?>
            </tr>
        <?php
            $n++;
            $j++;
        }
        ?>
        <tr>
            <td class="text-center">Nilai Mape</td>
            <td class="text-center">-</td>
            <?php 
                for ($i=0; $i<count($Mape); $i++){
            ?>
                <td class="text-center"><?= number_format($Mape[$i],2) ?></td>
            <?php 
            } 
            ?>
        </tr>
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->