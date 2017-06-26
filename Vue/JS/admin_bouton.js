function show_admin_button(x){
    if (x== 3|| x== 2) {
        document.getElementById('pop_up_admin').display = "flex";
    }
    else{
        document.getElementById('pop_up_admin').display = "none";
    }
    return;
}
