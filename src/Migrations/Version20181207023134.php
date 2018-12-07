<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181207023134 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agenda (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, action VARCHAR(50) NOT NULL, description VARCHAR(1000) DEFAULT NULL, date_fin DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo_list (id INT AUTO_INCREMENT NOT NULL, agenda_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, description VARCHAR(1000) DEFAULT NULL, date DATETIME DEFAULT NULL, importance INT NOT NULL, INDEX IDX_1B199E07EA67784A (agenda_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE todo_list ADD CONSTRAINT FK_1B199E07EA67784A FOREIGN KEY (agenda_id) REFERENCES agenda (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE todo_list DROP FOREIGN KEY FK_1B199E07EA67784A');
        $this->addSql('DROP TABLE agenda');
        $this->addSql('DROP TABLE todo_list');
    }
}
