<!--begin::Table-->
<h4 class="mb-3 mt-5">
    Perhitungan Alpha
</h4>
<table class="table table-row-dashed table-row-gray-500 align-middle gs-0 gy-4">
    <!--begin::Table head-->
    <thead class="fs-6">
        <tr class="fw-bolder text-gray-800">
            <th class="w-50px text-center">
                No
            </th>
            <th class="min-w-100px text-center">Nilai Aktual</th>
            <?php
            foreach ($alpa as $v) {
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
        $n = 1;
        $j = 0;
        foreach ($dataAktual as $val) {
        ?>
            <tr>
                <td class="text-center"><?= $n ?></td>
                <td class="text-center"><?= $val ?></td>
                <?php
                foreach ($dataPrediksi[$j] as $v) {
                ?>
                    <td class="text-center"><?= $v ?></td>
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
            <td class="text-center">Mape</td>
            <td class="text-center">-</td>
            <?php
            for ($i = 0; $i < count($Mape); $i++) {
                if ($i < 8) {
            ?>
                    <td class="text-center"><?= number_format($Mape[$i], 2) ?></td>
                <?php
                } else {
                ?>
                    <td style="background-color: yellow;" class="text-center"><?= number_format($Mape[$i], 2) ?></td>
            <?php
                }
            }
            ?>
        </tr>
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->