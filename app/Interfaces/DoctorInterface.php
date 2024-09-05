<?php

namespace App\Interfaces;

interface DoctorInterface
{
    public function getAllDoctors();

    public function getDoctorById($id);

    public function deleteDoctorWithRelations($id);

    public function createDoctor(array $doctorDetails);

    public function updateDoctor($id, array $newDetails);
}
