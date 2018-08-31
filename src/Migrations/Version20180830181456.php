<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180830181456 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(128) NOT NULL, description VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cocktail (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, prix INT DEFAULT NULL, volume INT DEFAULT NULL, origine VARCHAR(45) DEFAULT NULL, image_url VARCHAR(100) DEFAULT NULL, INDEX IDX_7B4914D4BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cocktail_ingredient (cocktail_id INT NOT NULL, ingredient_id INT NOT NULL, INDEX IDX_1A2C0A39CD6F76C6 (cocktail_id), INDEX IDX_1A2C0A39933FE08C (ingredient_id), PRIMARY KEY(cocktail_id, ingredient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(45) NOT NULL, description VARCHAR(45) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cocktail ADD CONSTRAINT FK_7B4914D4BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE cocktail_ingredient ADD CONSTRAINT FK_1A2C0A39CD6F76C6 FOREIGN KEY (cocktail_id) REFERENCES cocktail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cocktail_ingredient ADD CONSTRAINT FK_1A2C0A39933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cocktail DROP FOREIGN KEY FK_7B4914D4BCF5E72D');
        $this->addSql('ALTER TABLE cocktail_ingredient DROP FOREIGN KEY FK_1A2C0A39CD6F76C6');
        $this->addSql('ALTER TABLE cocktail_ingredient DROP FOREIGN KEY FK_1A2C0A39933FE08C');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE cocktail');
        $this->addSql('DROP TABLE cocktail_ingredient');
        $this->addSql('DROP TABLE ingredient');
    }
}
