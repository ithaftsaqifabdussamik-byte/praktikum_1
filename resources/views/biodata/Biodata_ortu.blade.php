<html>
    <head>
        <title>tugas table biodata ortu</title>
    </head><br><br>
    <body>
        <table align=center border=1 height=30% width=30% >
            <tr>
                <td colspan="3" align="center"><font face="courier"><b>BIODATA AYAH</b></font></td>
            </tr>
            <tr>
                <td>Nama: </td>
                <td>{{ $nama_ayah }}</td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir: </td>
                <td>{{ $ttl_ayah }}</td>
            </tr>
            <tr>
                <td>Pekerjaan: </td>
                <td>{{ $pekerjaan_ayah }}</td>
            </tr>
            <tr>
                <td>Alamat: </td>
                <td>{{ $alamat_ayah }}</td>
            </tr>
            <tr>
                <td>No. Telp: </td>
                <td>{{$hp_ayah}}</td>
            </tr>
        </table>
    </body>
</html> <br><br>

<html>
    <head>
        <title>tugas table biodata</title>
    </head>
    <body>
        <table align=center border=1 height=30% width=30% >
            <tr>
                <td colspan="3" align="center"><font face="courier"><b>BIODATA IBU</b></font></td>
            </tr>
            <tr align="center">
                <td>Nama: </td>
                <td>{{ $nama_ibu }}</td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir: </td>
                <td>{{ $ttl_ibu }}</td>
            </tr>
            <tr>
                <td>Pekerjaan: </td>
                <td>{{ $pekerjaan_ibu }}</td>
            </tr>
            <tr>
                <td>Alamat: </td>
                <td>{{ $alamat_ibu }}</td>
            </tr>
            <tr>
                <td>No. Telp: </td>
                <td>{{ $hp_ibu }}</td>
            </tr>
        </table>

    </body>
</html>