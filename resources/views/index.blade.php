<div class="main-content">
    <h1>Ung dung xem gio hien tai cua cac thanh pho tren the gioi</h1>
    <label for="select-city"></label>
    <select name="" id="select-city">
        <option>Chon thanh pho</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Havana</option>
        <option value="Asia-Hong_Kong">Hong Cong</option>
        <option value="Asia-Ho_Chi_Minh">Ho Chi Minh, Viet Nam</option>
    </select>

</div>
<script>
    document.getElementById("select-city").onchange = function () {
        ChooseCity()
    };

    function ChooseCity() {
        let time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
