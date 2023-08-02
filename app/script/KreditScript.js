$(document).ready(function () {
    const month = ['jun-22', 'jul-22', 'dec-22', 'mar-22', 'mar-23', 'apr-23', 'mei-23', 'jun-23'];
    const dataTable = $(".table-editable");

    // Function to add a new row to the table
    function addNewRow() {
        const newRow = $("<tr></tr>");

        // Add the first column (Cabang)
        const cabangCell = $("<td contenteditable='true' class='cabang'>cabang</td>");
        newRow.append(cabangCell);

        // Add the cells for each month
        month.forEach((monthName) => {
            const cell = $(`<td contenteditable="true" class="realisasi" data-month="${monthName}">`);
            newRow.append(cell);
        });
        // Add a "Remove Row" button to the row
        const removeBtn = $("<button class='btn btn-sm btn-danger btnRemoveRow'><i class='fas fa-trash'></i></button>");
        const removeCell = $("<td></td>").append(removeBtn);
        newRow.append(removeCell);



        // Append the new row to the table body
        dataTable.find("tbody").append(newRow);
    }

    // Attach click event to the "Tambah" button
    $(".btn-tambah").on("click", function () {
        addNewRow();
    });

    // Attach click event to the "Remove Row" button
    $(document).on("click", '.btnRemoveRow', function () {
        $(this).closest("tr").remove();
    });

    $(document).on('click', '.btn-filter', function () {
        let gbId = $('#group_filter').val();
        let baseurl = $(this).data('baseurl')
        document.location.href = baseurl + '/kreditrealisasi/' + gbId;
    })

    $(document).on('click', '.btn-save', function () {
        // Collect the data from the dynamic table
        const realisasiData = [];
        $('tbody tr').each(function () {
            const cabang = $(this).find('.cabang').text().trim();
            const tahun = $('#tahun').val();
            const jenis_lembar_kerja = $('#jenis_lembar_kerja').val();
            const bulan_input = $('#bulan_input').val();
            const realisasiRow = { cabang, tahun, jenis_lembar_kerja, bulan_input, bulan: [] };

            $(this).find('.realisasi').each(function () {
                const month = $(this).data('month');
                const value = $(this).text().trim();

                realisasiRow.bulan.push({ [month]: value });
            });

            realisasiData.push(realisasiRow);
        });

        console.log(realisasiData);

        // Send the data to the server using jQuery AJAX
        $.ajax({
            url: 'kreditrealisasi/store',
            method: 'POST',
            data: {
                formData: realisasiData,
            },
            success: function (response) {
                // Handle the response from the server if needed
                console.log(response)
                toastr.info(
                    'Data berhasil tersimpan !'
                );
            },
            error: function (error) {
                // Handle any errors that occur during the request
                console.error('Error:', error);
            }
        });
    });




});
