let dataList = JSON.parse(localStorage.getItem('dataList')) || [];

document.getElementById('dataForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const dataId = document.getElementById('dataId').value;
    const nama = document.getElementById('nama').value;
    const alamat = document.getElementById('alamat').value;
    const tanggalLahir = document.getElementById('tanggalLahir').value;

    if (!nama || !alamat || !tanggalLahir) {
        alert("Semua field harus diisi!");
        return;
    }

    if (dataId) {
        updateData(dataId, nama, alamat, tanggalLahir);
    } else {
        createData(nama, alamat, tanggalLahir);
    }

    clearForm();
    renderDataList();
});

function createData(nama, alamat, tanggalLahir) {
    const newData = {
        id: Date.now().toString(),
        nama,
        alamat,
        tanggalLahir
    };
    dataList.push(newData);
    saveDataList();
}

function updateData(id, nama, alamat, tanggalLahir) {
    const data = dataList.find(item => item.id === id);
    data.nama = nama;
    data.alamat = alamat;
    data.tanggalLahir = tanggalLahir;
    saveDataList();
}

function deleteData(id) {
    dataList = dataList.filter(item => item.id !== id);
    saveDataList();
    renderDataList();
}

function saveDataList() {
    localStorage.setItem('dataList', JSON.stringify(dataList));
}

function renderDataList() {
    const dataListContainer = document.getElementById('dataList');
    dataListContainer.innerHTML = '';

    dataList.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.id}</td>
            <td>${item.nama}</td>
            <td>${item.alamat}</td>
            <td>${item.tanggalLahir}</td>
            <td>
                <button onclick="editData('${item.id}')"><i class="fas fa-edit"></i> Edit</button>
                <button onclick="deleteData('${item.id}')"><i class="fas fa-trash"></i> Delete</button>
            </td>
        `;
        dataListContainer.appendChild(row);
    });
}

function editData(id) {
    const item = dataList.find(data => data.id === id);
    document.getElementById('dataId').value = item.id;
    document.getElementById('nama').value = item.nama;
    document.getElementById('alamat').value = item.alamat;
    document.getElementById('tanggalLahir').value = item.tanggalLahir;
}

function clearForm() {
    document.getElementById('dataForm').reset();
    document.getElementById('dataId').value = '';
}

function searchData() {
    const searchValue = document.getElementById('searchInput').value.toLowerCase();
    const filteredData = dataList.filter(item => item.nama.toLowerCase().includes(searchValue));
    renderFilteredDataList(filteredData);
}

function renderFilteredDataList(filteredData) {
    const dataListContainer = document.getElementById('dataList');
    dataListContainer.innerHTML = '';

    filteredData.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.id}</td>
            <td>${item.nama}</td>
            <td>${item.alamat}</td>
            <td>${item.tanggalLahir}</td>
            <td>
                <button onclick="editData('${item.id}')"><i class="fas fa-edit"></i> Edit</button>
                <button onclick="deleteData('${item.id}')"><i class="fas fa-trash"></i> Delete</button>
            </td>
        `;
        dataListContainer.appendChild(row);
    });
}

// Initial render
renderDataList();
