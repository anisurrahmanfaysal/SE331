<?php

namespace App\Repositories\Interface;

interface EmployeeInterface
{
  public function AllData();
  public function findById($id);
  public function storeData($request);
  public function updateData($request, $employee);
}
