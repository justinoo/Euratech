<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200217151042 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact2 (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE create_atelier (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation CHANGE adresse2 adresse2 VARCHAR(255) DEFAULT NULL, CHANGE kidname kidname VARCHAR(255) DEFAULT NULL, CHANGE accompagnants accompagnants TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE school ADD nomref VARCHAR(255) NOT NULL, ADD prenomref VARCHAR(255) NOT NULL, DROP nom, DROP prenom, DROP classe, DROP date, CHANGE nbrestudent nbrestudent VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contact2');
        $this->addSql('DROP TABLE create_atelier');
        $this->addSql('ALTER TABLE reservation CHANGE adresse2 adresse2 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE kidname kidname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE accompagnants accompagnants TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE school ADD nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD classe LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', ADD date LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', DROP nomref, DROP prenomref, CHANGE nbrestudent nbrestudent INT NOT NULL');
    }
}
