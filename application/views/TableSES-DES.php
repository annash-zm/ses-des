<!--begin::Table-->
<table class="table table-row-dashed table-striped table-row-gray-300 align-middle gs-0 gy-4">
    <!--begin::Table head-->
    <thead>
        <tr class="fw-bolder text-gray-800">
            <th class="w-80px text-center">
                No
            </th>
            <th class="w-80px">Tahun</th>
            <th class="text-center">Jumlah</th>
            <th class="">S<sub>1t</sub></th>
            <th class="">S<sub>2t</sub></th>
            <th class="">A<sub>t</sub></th>
            <th class="">B<sub>t</sub></th>
            <th class="">S<sub>t+m</sub></th>
            <th class="">Mape</th>
        </tr>
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="fs-6">
        <?php
        $n = 1; $i=0;
        foreach ($data_ as $v) {
        ?>
            <tr>
                <td class="text-center"><?= $n ?></td>
                <td><?= $v->tahun ?></td>
                <td class="text-center"><?= $v->jumlah ?></td>
                <td><?= $s1t[$i] ?></td>
                <td><?= $s2t[$i] ?></td>
                <td><?= $At[$i] ?></td>
                <td><?= $Bt[$i] ?></td>
                <td><?= $Sm[$i] ?></td>
                <td><?= $Mape[$i] ?></td>
            </tr>
        <?php $n++; $i++;
        } ?>
        <tr>
            <td colspan="6"></td>
            <td colspan="2">Avg. Mape</td>
            <td><?= number_format($Rerata,2) ?></td>
        </tr>
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->