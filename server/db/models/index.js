const fs = require('fs');
const path = require('path');
const Sequelize = require('sequelize');

const basename = path.basename(__filename);
const env = process.env.NODE_ENV || 'development';
const config = require(__dirname + '/../config/config.json')[env];
const db = {};

const sequelize = config.use_env_variable ? new Sequelize(process.env[config.use_env_variable], config)
  : new Sequelize(config.database, config.username, config.password, config);

db.Accounts = require(path.join(__dirname, 'accounts.js'))(sequelize, Sequelize.DataTypes)
db.Points = require(path.join(__dirname, 'points.js'))(sequelize, Sequelize.DataTypes)
// db.Accounts = require['import'](path.join(__dirname, 'accounts.js'));
// db.Points = sequelize['import'](path.join(__dirname, 'points.js'));


Object.keys(db).forEach((modelName) => {
  if (db[modelName].associate) {
    db[modelName].associate(db);
  }
});

db.sequelize = sequelize;
db.Sequelize = Sequelize;

if (env === 'development') {
  sequelize.sync();
}

module.exports = db;