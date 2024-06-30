
<table class="table table-row-dashed table-striped table-row-gray-500 align-middle gs-0 gy-4">
    <!--begin::Table head-->
    <thead>
        <tr class="fw-bolder text-gray-800">
            <th class="min-w-100px text-center">
                No
            </th>
            <th class="min-w-100px text-center">Tahun</th>
            <th class="text-center min-w-100px">Jumlah</th>
            <th class="min-w-100px">S<sub>1t</sub></th>
            <th class="min-w-100px">S<sub>2t</sub></th>
            <th class="min-w-100px">A<sub>t</sub></th>
            <th class="min-w-100px">B<sub>t</sub></th>
            <th class="min-w-100px">S<sub>t+m</sub></th>
            <th class="text-end px-5">Mape</th>
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
                <td class="text-center"><?= $v->tahun ?></td>
                <td class="text-center"><?= $v->jumlah ?></td>
                <td><?= number_format($s1t[$i],2) ?></td>
                <td><?= number_format($s2t[$i],2) ?></td>
                <td><?= $At[$i]!='-' ? number_format($At[$i],2) : $At[$i] ?></td>
                <td><?= $Bt[$i]!='-' ? number_format($Bt[$i],2) : $Bt[$i] ?></td>
                <td><?= $Sm[$i]!='-' ? number_format($Sm[$i],2) : $Sm[$i] ?></td>
                <td class="text-end px-5"><?= $Mape[$i]!='-' ? number_format($Mape[$i],2) : $Mape[$i] ?></td>
            </tr>
        <?php $n++; $i++;
        } ?>
        <tr>
            <td colspan="6"></td>
            <td colspan="2">Avg. Mape</td>
            <td class="text-end px-5"><?= number_format($Rerata,2) ?></td>
        </tr>
    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->