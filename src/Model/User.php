<?php


class user
{
    public string $UserID { get; set; }
    public string $UserName { get; set; }
    public string $Email { get; set; }
    public string $CreatedAt { get; set; }
    private string $PasswordHash { get; set; }
}
