<div>
     <html>
    <head>
        <title>tugas table biodata</title>
    </head>
    <body>
        <table align=center border=1 height=40% width=30.5% >
            <tr>
                <td colspan="3" align="center"><font face="courier"><b>BIODATA</b></font></td>
            </tr>
            <tr>
                <td>Nama: </td>
                <td>{{ $nama }}</td>
                <td rowspan="7"><img src="images/ithaf.jpeg" align="center" width="150" height="200"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir: </td>
                <td>{{ $ttl }}</td>
            </tr>
            <tr>
                <td>NIM: </td>
                <td>{{ $nim }}</td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td>{{ $prodi }}</td>
            </tr>
            <tr>
                <td>Jurusan: </td>
                <td>{{ $jurusan }}</td>
            </tr>
            <tr>
                <td>Alamat: </td>
                <td>{{ $alamat }}</td>
            </tr>
            <tr>
                <td>No. Telp: </td>
                <td{{ $hp }}</td>
            </tr>
        </table>
    </body>
</html>
</div>
