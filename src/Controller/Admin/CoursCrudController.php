<?php

namespace App\Controller\Admin;

use App\Entity\Cours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CoursCrudController extends AbstractCrudController
{
    public const UPLOAD_BASE = "/Assets/Upload";
    public const UPLOAD_DIR_PATH = "public/Assets/Upload";
    public static function getEntityFqcn(): string
    {
        return Cours::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name','Nom du cours'),
            ImageField::new('images')
                ->setBasePath(self::UPLOAD_BASE)
                ->setUploadDir(self::UPLOAD_DIR_PATH),
            TextField::new('Age',"Categories d'âge"),
            TextEditorField::new('descriptions','Description'),
        ];
    }
}
