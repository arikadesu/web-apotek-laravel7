<?php
use Illuminate\Database\Seeder;
class PenggunaSeeder extends Seeder
{
/**
 * Run the database seeds.
*
 * @return void
 */
public function run()
{
$pengguna = new \App\User;
$pengguna->username = "AdminYuji";
$pengguna->name = "Itadori Yuji";
$pengguna->email = "itadoriyuji@gmail.com";
$pengguna->roles = json_encode(["ADMIN"]);
$pengguna->password = \Hash::make( "choso");
$pengguna->phone = "081851851851";
$pengguna->address = "Jl Jujutsu No. 11 Bogor";
$pengguna->status = "ACTIVE";
$pengguna->save();
$this->command->info( "User Admin berhasil diinsert");
}
}