$(document).ready(function () {
    const col = ['nama', 'nominal', 'rate', 'jangka_waktu', 'keterangan', 'tgl_proyeksi'];
    const dataTable = $(".table-editable");

    function addNewRow(tableId) {
        const newRow = $("<tr></tr>");

        // Add the cells for each col
        col.forEach((cells) => {
            const cell = $(`<td contenteditable="true" class="cell-data" data-col="${cells}">`);
            newRow.append(cell);
        });

        // Add a "Remove Row" button to the row
        const removeBtn = $("<button class='btn btn-sm btn-danger btnRemoveRow'><i class='fas fa-trash'></i></button>");
        const removeCell = $("<td></td>").append(removeBtn);
        newRow.append(removeCell);

        // Append the new row to the specified table
        $("#" + tableId).find("tbody").append(newRow);
    }

    // Attach click event to the "Tambah" button
    $(".btn-tambah-nonbumd-giro-cash-in").on("click", function () {
        addNewRow('table-nonbumd-giro-cash-in');
    });

    $(".btn-tambah-nonbumd-giro-cash-out").on("click", function () {
        addNewRow('table-nonbumd-giro-cash-out');
    });

    $(".btn-tambah-nonbumd-deposito-cash-in").on("click", function () {
        addNewRow('table-nonbumd-deposito-cash-in');
    });


    $(".btn-tambah-nonbumd-deposito-cash-out").on("click", function () {
        addNewRow('table-nonbumd-deposito-cash-out');
    });

    // Attach click event to the "Remove Row" button
    $(document).on("click", '.btnRemoveRow', function () {
        $(this).closest("tr").remove();
    });



    $(document).on('click', '.btn-save-all', function () {
        $('.btn-save-nonbumd-giro-cash-in').click();
        $('.btn-save-nonbumd-giro-cash-out').click();
        $('.btn-save-nonbumd-deposito-cash-in').click();
        $('.btn-save-nonbumd-deposito-cash-out').click();
    })

    $(document).on('click', '.btn-save-nonbumd-giro-cash-in', function () {
        // Collect the data from the dynamic table

        const giroCashInData = [];
        $('#table-nonbumd-giro-cash-in tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'nonbumd-giro-cash-in',
            };

            $(this).find('.cell-data').each(function () {
                const col = $(this).data('col');
                const value = $(this).text().trim();
                if (cellData.hasOwnProperty(col)) {
                    cellData[col] = value;
                }
            });

            giroCashInData.push(cellData);
        });

        console.log(giroCashInData);

        // Send the data to the server using jQuery AJAX
        $.ajax({
            url: 'http://localhost/e-tax2/dpk/store',
            method: 'POST',
            // dataType: 'json',
            data: {
                formData: giroCashInData,
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


    $(document).on('click', '.btn-save-nonbumd-giro-cash-out', function () {
        // Collect the data from the dynamic table
        const giroCashInData = [];
        $('#table-nonbumd-giro-cash-out tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'nonbumd-giro-cash-out',
            };

            $(this).find('.cell-data').each(function () {
                const col = $(this).data('col');
                const value = $(this).text().trim();
                if (cellData.hasOwnProperty(col)) {
                    cellData[col] = value;
                }
            });

            giroCashInData.push(cellData);
        });

        console.log(giroCashInData);

        // Send the data to the server using jQuery AJAX
        $.ajax({
            url: 'http://localhost/e-tax2/dpk/store',
            method: 'POST',
            // dataType: 'json',
            data: {
                formData: giroCashInData,
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


    $(document).on('click', '.btn-save-nonbumd-deposito-cash-in', function () {
        // Collect the data from the dynamic table
        const giroCashInData = [];
        $('#table-nonbumd-deposito-cash-in tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'nonbumd-deposito-cash-in',
            };

            $(this).find('.cell-data').each(function () {
                const col = $(this).data('col');
                const value = $(this).text().trim();
                if (cellData.hasOwnProperty(col)) {
                    cellData[col] = value;
                }
            });

            giroCashInData.push(cellData);
        });

        console.log(giroCashInData);

        // Send the data to the server using jQuery AJAX
        $.ajax({
            url: 'http://localhost/e-tax2/dpk/store',
            method: 'POST',
            // dataType: 'json',
            data: {
                formData: giroCashInData,
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

    $(document).on('click', '.btn-save-nonbumd-deposito-cash-out', function () {
        // Collect the data from the dynamic table
        const giroCashInData = [];
        $('#table-nonbumd-deposito-cash-out tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'nonbumd-deposito-cash-out',
            };

            $(this).find('.cell-data').each(function () {
                const col = $(this).data('col');
                const value = $(this).text().trim();
                if (cellData.hasOwnProperty(col)) {
                    cellData[col] = value;
                }
            });

            giroCashInData.push(cellData);
        });

        console.log(giroCashInData);

        // Send the data to the server using jQuery AJAX
        $.ajax({
            url: 'http://localhost/e-tax2/dpk/store',
            method: 'POST',
            // dataType: 'json',
            data: {
                formData: giroCashInData,
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

    document.getElementById('export-button').addEventListener('click', function () {
        // Create a new workbook
        var workbook = XLSX.utils.book_new();

        // Define the table names and their corresponding names for the sheets
        var tables = [
            { id: 'table-nonbumd-giro-cash-in', name: 'Giro cash in' },
            { id: 'table-nonbumd-giro-cash-out', name: 'Giro cash out' },
            { id: 'table-nonbumd-deposito-cash-in', name: 'Deposito cash in' },
            { id: 'table-nonbumd-deposito-cash-out', name: 'Deposito cash out' },
            { id: 'table-giro-net', name: 'Giro net' },
            { id: 'table-depo-net', name: 'Depo net' }

        ];

        tables.forEach(function (tableInfo) {
            var table = document.getElementById(tableInfo.id);

            // Get the data from the table
            var tableData = XLSX.utils.table_to_sheet(table, { sheet: tableInfo.name });

            // Create a new worksheet for each table
            XLSX.utils.book_append_sheet(workbook, tableData, tableInfo.name);
        });

        // Generate and download the Excel file
        XLSX.writeFile(workbook, 'exported_tables.xlsx');
    });



});
