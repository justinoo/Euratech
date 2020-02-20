<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200219145927 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE create_atelier_enfants (create_atelier_id INT NOT NULL, enfants_id INT NOT NULL, INDEX IDX_6259597491AF7DD1 (create_atelier_id), INDEX IDX_62595974A586286C (enfants_id), PRIMARY KEY(create_atelier_id, enfants_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE create_atelier_enfants ADD CONSTRAINT FK_6259597491AF7DD1 FOREIGN KEY (create_atelier_id) REFERENCES create_atelier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE create_atelier_enfants ADD CONSTRAINT FK_62595974A586286C FOREIGN KEY (enfants_id) REFERENCES enfants (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation CHANGE adresse2 adresse2 VARCHAR(255) DEFAULT NULL, CHANGE kidname kidname VARCHAR(255) DEFAULT NULL, CHANGE accompagnants accompagnants TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE create_atelier_enfants');
        $this->addSql('ALTER TABLE reservation CHANGE adresse2 adresse2 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE kidname kidname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE accompagnants accompagnants TINYINT(1) DEFAULT \'NULL\'');
    }
}
