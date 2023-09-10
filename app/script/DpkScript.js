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
    $(".btn-tambah-bumd-giro-cash-in").on("click", function () {
        addNewRow('table-bumd-giro-cash-in');
    });

    $(".btn-tambah-bumd-giro-cash-out").on("click", function () {
        addNewRow('table-bumd-giro-cash-out');
    });

    $(".btn-tambah-bumd-deposito-cash-in").on("click", function () {
        addNewRow('table-bumd-deposito-cash-in');
    });


    $(".btn-tambah-bumd-deposito-cash-out").on("click", function () {
        addNewRow('table-bumd-deposito-cash-out');
    });

    // Attach click event to the "Remove Row" button
    $(document).on("click", '.btnRemoveRow', function () {
        $(this).closest("tr").remove();
    });

    $(document).on('click', '.btn-save-all', function () {
        $('.btn-save-bumd-giro-cash-in').click();
        $('.btn-save-bumd-giro-cash-out').click();
        $('.btn-save-bumd-deposito-cash-in').click();
        $('.btn-save-bumd-deposito-cash-out').click();
    })

    $(document).on('click', '.btn-save-bumd-giro-cash-in', function () {
        // Collect the data from the dynamic table
        const giroCashInData = [];
        $('#table-bumd-giro-cash-in tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'bumd-giro-cash-in',
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
            url: 'dpk/store',
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


    $(document).on('click', '.btn-save-bumd-giro-cash-out', function () {
        // Collect the data from the dynamic table
        const giroCashInData = [];
        $('#table-bumd-giro-cash-out tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'bumd-giro-cash-out',
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
            url: 'dpk/store',
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


    $(document).on('click', '.btn-save-bumd-deposito-cash-in', function () {
        // Collect the data from the dynamic table
        const giroCashInData = [];
        $('#table-bumd-deposito-cash-in tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'bumd-deposito-cash-in',
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
            url: 'dpk/store',
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

    $(document).on('click', '.btn-save-bumd-deposito-cash-out', function () {
        // Collect the data from the dynamic table
        const giroCashInData = [];
        $('#table-bumd-deposito-cash-out tbody tr').each(function () {
            const cellData = {
                'nama': '',
                'nominal': '',
                'rate': '',
                'jangka_waktu': '',
                'keterangan': '',
                'tgl_proyeksi': '',
                'tipe': 'bumd-deposito-cash-out',
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
            url: 'dpk/store',
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
        // Create a new workbook and worksheet
        var workbook = XLSX.utils.book_new();
        var worksheet = XLSX.utils.json_to_sheet([]);

        // Select and export each table
        var tableNames = ['table-bumd-giro-cash-in', 'table-bumd-giro-cash-out', 'table-giro-net', 'table-bumd-deposito-cash-in', 'table-bumd-deposito-cash-out', 'table-depo-net']; // Replace with the IDs of your tables

        var columnIndex = 0; // Start at column A
        var rowIndex = 0; // Start at row 1
        var tablesPerRow = 3; // Number of tables to stack before moving to the next row

        tableNames.forEach(function (tableName) {
            var table = document.getElementById(tableName);
            var tableData = XLSX.utils.table_to_sheet(table, { sheet: tableName });

            // Get the data as an array of objects
            var jsonData = XLSX.utils.sheet_to_json(tableData, { header: 1 });

            // Calculate the row and column for the current table
            var currentRow = rowIndex + Math.floor(columnIndex / tablesPerRow) * jsonData.length;
            var currentColumn = (columnIndex % tablesPerRow) * (jsonData[0].length + 1);

            // Add the data to the 'CombinedSheet' starting from the calculated row and column
            XLSX.utils.sheet_add_json(worksheet, jsonData, { origin: { r: currentRow, c: currentColumn } });

            // Increment the column index
            columnIndex += 1;

            // If we've added tablesPerRow tables in the current row, move to the next row
            if (columnIndex % tablesPerRow === 0) {
                rowIndex += jsonData.length;
                columnIndex = 0;
            }
        });

        // Add the combined data to the workbook
        XLSX.utils.book_append_sheet(workbook, worksheet, 'CombinedSheet');

        // Generate and download the Excel file
        XLSX.writeFile(workbook, 'exported_tables.xlsx');
    });




});
