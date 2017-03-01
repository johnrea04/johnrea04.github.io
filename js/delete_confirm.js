function delete_confirm()
{
    if (confim("Are you sure to delete the account?"))
        location.href='delete.php?id=".$row['id']."';
}